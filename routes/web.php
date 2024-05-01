<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

/* Admin Controller */
use App\Http\Controllers\Admin\HomeController as AdminHomeController;


/* Academic Controller */
use App\Http\Controllers\Academic\HomeController as AcademicHomeController;


/* Student Controller */
use App\Http\Controllers\Student\HomeController as StudentHomeController;


/* Lecture Controller */
use App\Http\Controllers\Lecture\HomeController as LectureHomeController;


/* Finance Controller */
use App\Http\Controllers\Finance\HomeController as FinanceHomeController;


/* PDDIKTI Controller */
use App\Http\Controllers\Pddikti\HomeController as PddiktiHomeController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('home', [AdminHomeController::class, 'index'])->name('home');

    });

    Route::group(['middleware' => ['role:academic'], 'prefix' => 'academic', 'as' => 'academic.'], function() {
        Route::get('home', [AcademicHomeController::class, 'index'])->name('home');

    });

    Route::group(['middleware' => ['role:student'], 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::get('home', [StudentHomeController::class, 'index'])->name('home');

    });

    Route::group(['middleware' => ['role:lecture'], 'prefix' => 'lecture', 'as' => 'lecture.'], function() {
        Route::get('home', [LectureHomeController::class, 'index'])->name('home');

    });

    Route::group(['middleware' => ['role:finance'], 'prefix' => 'finance', 'as' => 'finance.'], function() {
        Route::get('home', [FinanceHomeController::class, 'index'])->name('home');

    });

    Route::group(['middleware' => ['role:pddikti'], 'prefix' => 'pddikti', 'as' => 'pddikti.'], function() {
        Route::get('home', [PddiktiHomeController::class, 'index'])->name('home');

    });
});