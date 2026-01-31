<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index(Quiz $quiz)
    {
        $questions = $quiz->questions;
        return view('admin.questions.index', compact('quiz','questions'));
    }

    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_answer' => 'required|in:a,b,c,d'
        ]);

        $quiz->questions()->create($request->all());

        return back()->with('success','Soal berhasil ditambahkan');
    }

    public function edit(Quiz $quiz, Question $question)
    {
        return view('admin.questions.edit', compact('quiz','question'));
    }

    public function update(Request $request, Quiz $quiz, Question $question)
    {
        $request->validate([
            'question' => 'required',
            'correct_answer' => 'required|in:a,b,c,d'
        ]);

        $question->update($request->all());

        return redirect()
            ->route('admin.quizzes.questions',$quiz)
            ->with('success','Soal berhasil diupdate');
    }

    public function destroy(Quiz $quiz, Question $question)
    {
        $question->delete();
        return back()->with('success','Soal dihapus');
    }
}
