<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/email', function () {
    Mail::to('mikheil.basheleishvili.1@btu.edu.ge')->send(new WelcomeMail());


    return new WelcomeMail();
});





Route::middleware("deny.auth")->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'getLogin'])->name('login');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'getRegister'])->name('register');

    Route::post('/post_login', [\App\Http\Controllers\AuthController::class, 'login'])->name('post_login');

    Route::post('/post_register', [\App\Http\Controllers\AuthController::class, 'register'])->name('post_register');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [\App\Http\Controllers\QuestionController::class, 'index'])->name('home');

    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::get('/questions/{question}', [\App\Http\Controllers\QuestionController::class, 'show'])->name('show_question');

    Route::get('/users/{user}', [\App\Http\Controllers\QuestionController::class, 'userQuestions'])->name('user_question');

    Route::put('/questions/{question}/upvote', [\App\Http\Controllers\QuestionController::class, 'upvote'])->name('upvote_question');

    Route::put('/questions/{question}/downvote', [\App\Http\Controllers\QuestionController::class, 'downvote'])->name('downvote_question');
});
