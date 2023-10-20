<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TeamController;

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
Route::resource('answers', AnswerController::class);
Route::resource('coaches', CoachController::class);
Route::resource('questions', QuestionController::class);
Route::resource('teams', TeamController::class);


Route::get('/', function () {
    return '<h1>Hello!</h1>';
    // return view('welcome');
});
