<?php
namespace App\Http\Controllers;
use App\Models\Quizzes;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function start()
    {
        session([
            'quiz_index' => 0,
            'quiz_score' => 0
        ]);

        return redirect('/quizzes');
    }

    public function index()
    {
        $index = session('quiz_index', 0);
        $quiz = Quizzes::skip($index)->first();

        if (!$quiz) {
            return redirect('/quizzes/result');
        }

        return view('quizzes.index', compact('quiz'));
    }

    public function check(Request $request)
    {
        $quiz = Quizzes::findOrFail($request->quiz_id);

        if ($request->answer === $quiz->correct_answer) {
            session(['quiz_score' => session('quiz_score') + 1]);
        }

        session(['quiz_index' => session('quiz_index') + 1]);

        return redirect('/quizzes');
    }

    public function result()
    {
        $total = Quizzes::count();
        $score = session('quiz_score');

        return view('quizzes.result', compact('total', 'score'));
    }
}

