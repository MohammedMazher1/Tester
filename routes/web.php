<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exam;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
Route::get('newTest', function () {
    return view('test.newtest');
})->name('newTest');
Route::get('/createNew', function () {
    return view('admin.index');
});
Route::post('/exam',[ExamController::class,'index'])->name('exam');

Route::resource('users',UserController::class);
