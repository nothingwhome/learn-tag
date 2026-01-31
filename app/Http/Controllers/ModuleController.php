<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\UserProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModuleController extends Controller
{
    public function index(Request $request)
    {
        $query = Module::where('is_active', true);
        
        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%')
                  ->orWhere('category', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }

        if ($request->has('difficulty') && $request->difficulty) {
            $query->where('difficulty_level', $request->difficulty);
        }

        $modules = $query->latest()->paginate(12);
        $categories = Module::where('is_active', true)->distinct()->pluck('category')->filter();

        return view('modules.index', compact('modules', 'categories'));
    }

    public function show($id)
    {
        $module = Module::findOrFail($id);
        $userProgress = null;

        if (auth()->check()) {
            $userProgress = UserProgress::where('user_id', auth()->id())
                ->where('module_id', $module->id)
                ->first();
        }

        return view('modules.show', compact('module', 'userProgress'));
    }

    public function download($id)
    {
        $module = Module::findOrFail($id);
        
        if (!Storage::disk('public')->exists($module->file_path)) {
            abort(404);
        }

        return Storage::disk('public')->download($module->file_path, $module->title . '.' . $module->file_type);
    }
}