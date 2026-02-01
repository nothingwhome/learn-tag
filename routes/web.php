<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizzesController;
use App\Http\Controllers\Admin\AdminQuizzesController;
use App\Http\Controllers\Admin\QuestionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/pelatihan', function () {
    return view('quiz.index');
});

Route::get('/navbar', function () {
    return view('component.navbar');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'role:admin']);


Route::get('/user', [HomeController::class, 'home'])
    ->middleware(['auth', 'role:user'])
    ->name('user.home');

Route::middleware(['user.only'])->group(function () {
    Route::get('/quizzes', [QuizzesController::class, 'index']);
    Route::post('/quizzes/check', [QuizzesController::class, 'check']);
    Route::post('/quizzes/next', [QuizzesController::class, 'next']);
    Route::get('/quizzes/result', [QuizzesController::class, 'result']);
    Route::get('/quizzes/start/{quiz}', [QuizzesController::class, 'start']);
});


Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('quizzes', AdminQuizzesController::class);
});

Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function () {
Route::get('quizzes/{quiz}/questions',[QuestionsController::class,'index'])
    ->name('quizzes.questions');
Route::post('quizzes/{quiz}/questions',[QuestionsController::class,'store'])
    ->name('quizzes.questions.  store');
Route::get('quizzes/{quiz}/questions/{question}/edit',[QuestionsController::class,'edit'])
    ->name('quizzes.questions.edit');
Route::put('quizzes/{quiz}/questions/{question}',[QuestionsController::class,'update'])
    ->name('quizzes.questions.update');
Route::delete('quizzes/{quiz}/questions/{question}',[QuestionsController::class,'destroy'])
    ->name('quizzes.questions.destroy');
});




Route::get('/section', function () {
    return view('quiz.sectionquiz');
});


Route::get('/user', [HomeController::class, 'home'])
    ->middleware(['auth', 'role:user'])
    ->name('user.home');

Route::middleware(['user.only'])->group(function () {
    Route::get('/quizzes', [QuizzesController::class, 'index']);
    Route::post('/quizzes/check', [QuizzesController::class, 'check']);
    Route::post('/quizzes/next', [QuizzesController::class, 'next']);
    Route::get('/quizzes/result', [QuizzesController::class, 'result']);
    Route::get('/quizzes/start/{quiz}', [QuizzesController::class, 'start']);
});


Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('quizzes', AdminQuizzesController::class);
});

Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function () {
Route::get('quizzes/{quiz}/questions',[QuestionsController::class,'index'])
    ->name('quizzes.questions');
Route::post('quizzes/{quiz}/questions',[QuestionsController::class,'store'])
    ->name('quizzes.questions.  store');
Route::get('quizzes/{quiz}/questions/{question}/edit',[QuestionsController::class,'edit'])
    ->name('quizzes.questions.edit');
Route::put('quizzes/{quiz}/questions/{question}',[QuestionsController::class,'update'])
    ->name('quizzes.questions.update');
Route::delete('quizzes/{quiz}/questions/{question}',[QuestionsController::class,'destroy'])
    ->name('quizzes.questions.destroy');
});




// Route::get('/home', function () {
//     return view('home.index');
// });
