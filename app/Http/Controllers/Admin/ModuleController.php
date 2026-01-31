<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::with('creator')->latest()->get();
        return view('admin.modules.index', compact('modules'));
    }

    public function create()
    {
        return view('admin.modules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'category' => 'nullable|string|max:255',
            'difficulty_level' => 'required|in:easy,medium,hard',
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('modules', $fileName, 'public');

        Module::create([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $filePath,
            'file_type' => $file->getClientOriginalExtension(),
            'category' => $request->category,
            'difficulty_level' => $request->difficulty_level,
            'created_by' => auth()->id(),
        ]);

        return redirect()->route('admin.modules.index')->with('success', 'Modul berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $module = Module::findOrFail($id);
        return view('admin.modules.edit', compact('module'));
    }

    public function update(Request $request, $id)
    {
        $module = Module::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'category' => 'nullable|string|max:255',
            'difficulty_level' => 'required|in:easy,medium,hard',
        ]);

        $updateData = [
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'difficulty_level' => $request->difficulty_level,
        ];

        if ($request->hasFile('file')) {
            // Delete old file
            if (Storage::disk('public')->exists($module->file_path)) {
                Storage::disk('public')->delete($module->file_path);
            }

            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('modules', $fileName, 'public');
            $updateData['file_path'] = $filePath;
            $updateData['file_type'] = $file->getClientOriginalExtension();
        }

        $module->update($updateData);

        return redirect()->route('admin.modules.index')->with('success', 'Modul berhasil diupdate!');
    }

    public function destroy($id)
    {
        $module = Module::findOrFail($id);
        
        // Delete file
        if (Storage::disk('public')->exists($module->file_path)) {
            Storage::disk('public')->delete($module->file_path);
        }

        $module->delete();
        return redirect()->route('admin.modules.index')->with('success', 'Modul berhasil dihapus!');
    }
}