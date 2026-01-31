<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class AdminQuizzesController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::withCount('questions')->latest()->get();
        return view('admin.quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('admin.quizzes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'nullable'
        ]);

        Quiz::create($request->only('title','description'));

        return redirect()
            ->route('admin.quizzes.index')
            ->with('success','Quizzes berhasil dibuat');
    }

    public function edit(Quiz $quiz)
    {
        return view('admin.quizzes.edit', compact('quiz'));
    }

    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'nullable'
        ]);

        $quiz->update($request->only('title','description'));

        return redirect()
            ->route('admin.quizzes.index')
            ->with('success','Quizzes berhasil diupdate');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return back()->with('success','Quizzes dihapus');
    }
}


