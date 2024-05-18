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

    Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('home', [AdminHomeController::class, 'index'])->name('home');

        Route::group(['prefix' => 'education', 'as' => 'education.'], function() {
            Route::get('/', [AdminEducationController::class, 'index'])->name('index');
            Route::get('show/{id}', [AdminEducationController::class, 'show'])->name('show');
            Route::get('edit/{id}', [AdminEducationController::class, 'edit'])->name('edit');
            Route::get('create', [AdminEducationController::class, 'create'])->name('create');
            Route::post('store', [AdminEducationController::class, 'store'])->name('store');
            Route::put('update/{id}', [AdminEducationController::class, 'update'])->name('update');
            Route::delete('delete/{id}', [AdminEducationController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'event', 'as' => 'event.'], function() {
            Route::get('/', [AdminEventController::class, 'index'])->name('index');
            Route::get('show/{id}', [AdminEventController::class, 'show'])->name('show');
            Route::get('edit/{id}', [AdminEventController::class, 'edit'])->name('edit');
            Route::get('create', [AdminEventController::class, 'create'])->name('create');
            Route::get('store', [AdminEventController::class, 'store'])->name('store');
            Route::get('update/{id}', [AdminEventController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminEventController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'institution', 'as' => 'institution.'], function() {
            Route::get('/', [AdminInstitutionController::class, 'index'])->name('index');
            Route::get('show/{id}', [AdminInstitutionController::class, 'show'])->name('show');
            Route::get('edit/{id}', [AdminInstitutionController::class, 'edit'])->name('edit');
            Route::get('create', [AdminInstitutionController::class, 'create'])->name('create');
            Route::get('store', [AdminInstitutionController::class, 'store'])->name('store');
            Route::get('update/{id}', [AdminInstitutionController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminInstitutionController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'lecture', 'as' => 'lecture.'], function() {
            Route::get('/', [AdminLectureController::class, 'index'])->name('index');

        });

        Route::group(['prefix' => 'student', 'as' => 'student.'], function() {
            Route::get('/', [AdminStudentController::class, 'index'])->name('index');

        });

        Route::group(['prefix' => 'user', 'as' => 'user.'], function() {
            Route::get('/', [AdminUserController::class, 'index'])->name('index');
            Route::get('show/{id}', [AdminUserController::class, 'show'])->name('show');
            Route::get('edit/{id}', [AdminUserController::class, 'edit'])->name('edit');
            Route::get('create', [AdminUserController::class, 'create'])->name('create');
            Route::get('store', [AdminUserController::class, 'store'])->name('store');
            Route::get('update/{id}', [AdminUserController::class, 'update'])->name('update');
            Route::get('delete/{id}', [AdminUserController::class, 'delete'])->name('delete');

            Route::group(['prefix' => 'password', 'as' => 'password.'], function() {
                Route::get('change', [AdminUserController::class, 'changePassword'])->name('change');
                Route::put('update/{id}', [AdminUserController::class, 'updatePassword'])->name('update');
            });
        });
    });

    Route::group(['middleware' => ['role:academic'], 'prefix' => 'academic', 'as' => 'academic.'], function() {
        Route::get('home', [AcademicHomeController::class, 'index'])->name('home');

        Route::group(['prefix' => 'period', 'as' => 'period.'], function() {

        });

        Route::group(['prefix' => 'calendar', 'as' => 'calendar.'], function() {

        });

        Route::group(['prefix' => 'class', 'as' => 'class.'], function() {

        });

        Route::group(['prefix' => 'curriculum', 'as' => 'curriculum.'], function() {

        });

        Route::group(['prefix' => 'exam', 'as' => 'exam.'], function() {

        });

        Route::group(['prefix' => 'grade', 'as' => 'grade.'], function() {

        });

        Route::group(['prefix' => 'lecture', 'as' => 'lecture.'], function() {

        });

        Route::group(['prefix' => 'report', 'as' => 'report.'], function() {

        });

        Route::group(['prefix' => 'schedule', 'as' => 'schedule.'], function() {

        });

        Route::group(['prefix' => 'student', 'as' => 'student.'], function() {

        });

        Route::group(['prefix' => 'subject', 'as' => 'subject.'], function() {

        });

        Route::group(['prefix' => 'transcript', 'as' => 'transcript.'], function() {

        });

    });

    Route::group(['middleware' => ['role:student'], 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::get('home', [StudentHomeController::class, 'index'])->name('home');

        Route::group(['prefix' => 'calendar', 'as' => 'calendar.'], function() {

        });

        Route::group(['prefix' => 'curriculum', 'as' => 'curriculum.'], function() {

        });

        Route::group(['prefix' => 'exam', 'as' => 'exam.'], function() {

        });

        Route::group(['prefix' => 'installment', 'as' => 'installment.'], function() {

        });

        Route::group(['prefix' => 'payment', 'as' => 'payment.'], function() {

        });

        Route::group(['prefix' => 'schedule', 'as' => 'schedule.'], function() {

        });

        Route::group(['prefix' => 'student', 'as' => 'student.'], function() {

        });

        Route::group(['prefix' => 'study-plan', 'as' => 'study-plan.'], function() {

        });

        Route::group(['prefix' => 'transcript', 'as' => 'transcript.'], function() {

        });
    });

    Route::group(['middleware' => ['role:lecture'], 'prefix' => 'lecture', 'as' => 'lecture.'], function() {
        Route::get('home', [LectureHomeController::class, 'index'])->name('home');

        Route::group(['prefix' => 'class', 'as' => 'class.'], function() {

        });

        Route::group(['prefix' => 'curriculum', 'as' => 'curriculum.'], function() {

        });

        Route::group(['prefix' => 'exam', 'as' => 'exam.'], function() {

        });

        Route::group(['prefix' => 'schedule', 'as' => 'schedule.'], function() {

        });

        Route::group(['prefix' => 'student', 'as' => 'student.'], function() {

        });
    });

    Route::group(['middleware' => ['role:finance'], 'prefix' => 'finance', 'as' => 'finance.'], function() {
        Route::get('home', [FinanceHomeController::class, 'index'])->name('home');

        Route::group(['prefix' => 'installment', 'as' => 'installment.'], function() {

        });

        Route::group(['prefix' => 'payment', 'as' => 'payment.'], function() {

        });

        Route::group(['prefix' => 'report', 'as' => 'report.'], function() {

        });
    });

    Route::group(['middleware' => ['role:pddikti'], 'prefix' => 'pddikti', 'as' => 'pddikti.'], function() {
        Route::get('home', [PddiktiHomeController::class, 'index'])->name('home');

        Route::group(['prefix' => 'class', 'as' => 'class.'], function() {

        });

        Route::group(['prefix' => 'curriculum', 'as' => 'curriculum.'], function() {

        });

        Route::group(['prefix' => 'institution', 'as' => 'institution.'], function() {

        });

        Route::group(['prefix' => 'lecture', 'as' => 'lecture.'], function() {

        });

        Route::group(['prefix' => 'student', 'as' => 'student.'], function() {

        });

        Route::group(['prefix' => 'study-activity', 'as' => 'study-activity.'], function() {

        });

        Route::group(['prefix' => 'subject', 'as' => 'subject.'], function() {

        });
    });
});