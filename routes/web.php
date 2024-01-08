<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exam;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ProgramController;
use App\Models\Program;

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
    if(Auth::user()){
        $user = Auth::user();
        Session::put('user', $user);
    }

    return view('welcome');
})->name('index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('exams.home',[ExamController::class,'home'] )->name('exams.home');
    Route::resource('exams',ExamController::class);
    Route::post('/result',[ExamController::class,'result'])->name('result');
    Route::get('/exam',[ExamController::class,'index'])->name('exam');
});

Route::middleware('admin')->group(function () {
    Route::get('admin', function () {
        return view('admin.dashbord');
    })->name('admin');
    Route::resource('users',UserController::class);
});

Route::resource('programs',ProgramController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
