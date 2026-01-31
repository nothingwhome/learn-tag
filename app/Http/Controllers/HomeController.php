<?php
namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $quizzes = Quiz::latest()->get();
        return view('home.index', compact('quizzes'));
    }
}

