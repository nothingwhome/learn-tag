<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('home.index');
});

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

Route::get('/user', function () {
    return view('home.index');
})->middleware(['auth', 'role:user']);


Route::get('/section', function () {
    return view('quiz.sectionquiz');
});



// Route::get('/home', function () {
//     return view('home.index');
// });
