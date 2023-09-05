<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\EnquiryController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CourseMangController;

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

Route::get('admin-login',[LoginController::class,'adminLogin'])->name('adminLogin');
Route::post('admin-login',[LoginController::class,'adminLoginPost'])->name('adminLoginPost');
// Route::get('add-new-enquiry', [EnquiryController::class, 'addNewEnquiry'])->name('addNewEnquiry');
// Route::get('list-enquiry', [EnquiryController::class, 'listEnquiry'])->name('listEnquiry');

Route::group(['prefix'=>'admin'],function(){
    Route::post('login',[LoginController::class,'adminLoginPost'])->name('adminLoginPost');

    Route::group(['middleware'=>'AdminAuth'],function(){
        Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

        //Add Enqiry Details
        Route::get('add-new-enquiry', [EnquiryController::class, 'addNewEnquiry'])->name('addNewEnquiry');
        Route::post('add-new-enquiry', [EnquiryController::class, 'storeNewEnquiry'])->name('storeNewEnquiry');

        Route::get('list-enquiry', [EnquiryController::class, 'listEnquiry'])->name('listEnquiry');

        Route::post('del-enquiry', [EnquiryController::class, 'delEnquiry'])->name('delEnquiry');

        Route::get('new-student', [StudentController::class, 'newStudent'])->name('newStudent');
        Route::post('new-student', [StudentController::class, 'storeNewStudent'])->name('storeNewStudent');
       

        Route::post('del-student', [StudentController::class, 'delStudent'])->name('delStudent');

        Route::get('student-list', [StudentController::class, 'studentList'])->name('studentList');
        Route::get('student-profile/{userId}', [StudentController::class, 'studentProfile'])->name('studentProfile');
        Route::get('student-edit/{userId?}', [StudentController::class, 'studentEdit'])->name('studentEdit');
        Route::post('student-edit/{userId?}', [StudentController::class, 'saveStudentEdit'])->name('saveStudentEdit');
        Route::get('admission-print/{userId}', [StudentController::class, 'admissionPrint'])->name('admissionPrint');

        Route::get('course-management', [CourseMangController::class, 'courseManage'])->name('courseManage');
        Route::post('course-management', [CourseMangController::class, 'storeCourseManage'])->name('storeCourseManage');

        Route::get('course-subject-list', [CourseMangController::class, 'courseSubjectList'])->name('courseSubjectList');
        // TESTING 
        Route::get('TESTING2', [CourseMangController::class, 'TESTING'])->name('TESTING');
    });
});
