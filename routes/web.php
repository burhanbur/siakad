<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

/* Admin Controller */
use App\Http\Controllers\Admin\EducationController as AdminEducationController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\InstitutionController as AdminInstitutionController;
use App\Http\Controllers\Admin\LectureController as AdminLectureController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\UserController as AdminUserController;


/* Academic Controller */
use App\Http\Controllers\Academic\AcademicPeriodController as AcademicPeriodController;
use App\Http\Controllers\Academic\CalendarController as AcademicCalendarController;
use App\Http\Controllers\Academic\ClassController as AcademicClassController;
use App\Http\Controllers\Academic\CurriculumController as AcademicCurriculumController;
use App\Http\Controllers\Academic\ExamController as AcademicExamController;
use App\Http\Controllers\Academic\GradeController as AcademicGradeController;
use App\Http\Controllers\Academic\HomeController as AcademicHomeController;
use App\Http\Controllers\Academic\LectureController as AcademicLectureController;
use App\Http\Controllers\Academic\ReportController as AcademicReportController;
use App\Http\Controllers\Academic\ScheduleController as AcademicScheduleController;
use App\Http\Controllers\Academic\StudentController as AcademicStudentController;
use App\Http\Controllers\Academic\SubjectController as AcademicSubjectController;
use App\Http\Controllers\Academic\TranscriptController as AcademicTranscriptController;


/* Student Controller */
use App\Http\Controllers\Student\CalendarController as StudentCalendarController;
use App\Http\Controllers\Student\CurriculumController as StudentCurriculumController;
use App\Http\Controllers\Student\ExamController as StudentExamController;
use App\Http\Controllers\Student\HomeController as StudentHomeController;
use App\Http\Controllers\Student\InstallmentController as StudentInstallmentController;
use App\Http\Controllers\Student\PaymentController as StudentPaymentController;
use App\Http\Controllers\Student\ScheduleController as StudentScheduleController;
use App\Http\Controllers\Student\StudentController as StudentStudentController;
use App\Http\Controllers\Student\StudyPlanController as StudentStudyPlanController;
use App\Http\Controllers\Student\TranscriptController as StudentTranscriptController;


/* Lecture Controller */
use App\Http\Controllers\Lecture\ClassController as LectureClassController;
use App\Http\Controllers\Lecture\CurriculumController as LectureCurriculumController;
use App\Http\Controllers\Lecture\ExamController as LectureExamController;
use App\Http\Controllers\Lecture\HomeController as LectureHomeController;
use App\Http\Controllers\Lecture\ScheduleController as LectureScheduleController;
use App\Http\Controllers\Lecture\StudentController as LectureStudentController;


/* Finance Controller */
use App\Http\Controllers\Finance\HomeController as FinanceHomeController;
use App\Http\Controllers\Finance\InstallmentController as FinanceInstallmentController;
use App\Http\Controllers\Finance\PaymentController as FinancePaymentController;
use App\Http\Controllers\Finance\ReportController as FinanceHReportController;


/* PDDIKTI Controller */
use App\Http\Controllers\Pddikti\ClassController as PddiktiClassController;
use App\Http\Controllers\Pddikti\CurriculumController as PddiktiCurriculumController;
use App\Http\Controllers\Pddikti\HomeController as PddiktiHomeController;
use App\Http\Controllers\Pddikti\InstitutionController as PddiktiInstitutionController;
use App\Http\Controllers\Pddikti\LectureController as PddiktiLectureController;
use App\Http\Controllers\Pddikti\StudentController as PddiktiStudentController;
use App\Http\Controllers\Pddikti\StudyActivityController as PddiktiStudyActivityController;
use App\Http\Controllers\Pddikti\SubjectController as PddiktiSubjectController;


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

        Route::group(['prefix' => 'user', 'as' => 'user.'], function() {

        });

        Route::group(['prefix' => 'institution', 'as' => 'institution.'], function() {

        });

        Route::group(['prefix' => 'report', 'as' => 'report.'], function() {

        });
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