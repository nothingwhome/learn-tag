<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    // mulai quiz
    public function start(Quiz $quiz)
{
    session([
        'quiz_id' => $quiz->id,
        'quiz_index' => 0,
        'quiz_score' => 0,
        'answered' => false,
    ]);

    return redirect('/quizzes');
}

    // tampil soal
    public function index()
{
    $quizId = session('quiz_id');
    $index  = session('quiz_index', 0);

    if (!$quizId) {
        abort(404);
    }

    $questions = Question::where('quiz_id', $quizId)->get();

    if (!isset($questions[$index])) {
        return redirect('/quizzes/result');
    }

    $question = $questions[$index];

    // 🔥 PENTING: pastikan answered default false
    if (!session()->has('answered')) {
        session(['answered' => false]);
    }

    return view('quizzes.index', compact('question'));
}

    // cek jawaban
   public function check(Request $request)
{
    $question = Question::findOrFail($request->question_id);

    $isCorrect = $request->answer === $question->correct_answer;

    if ($isCorrect) {
        session([
            'quiz_score' => session('quiz_score') + 1
        ]);
    }

    session([
        'last_result' => $isCorrect,
        'last_answer' => $request->answer,
        'correct_answer' => $question->correct_answer,
        'answered' => true
    ]);

    // ❌ JANGAN TAMBAH INDEX DI SINI
    return redirect('/quizzes');
}

public function next()
{
    session([
        'quiz_index' => session('quiz_index') + 1,
        'answered' => false,
        'last_answer' => null,
        'correct_answer' => null,
    ]);

    return redirect('/quizzes');
}

    // hasil akhir
    public function result()
    {
        $quizId = session('quiz_id');

        if (!$quizId) {
            abort(404);
        }

        $quiz  = Quiz::findOrFail($quizId);
        $total = Question::where('quiz_id', $quizId)->count();
        $score = session('quiz_score', 0);

        return view('quizzes.result', compact('quiz', 'total', 'score'));
    }
}
