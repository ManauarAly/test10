<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\EnquiryController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\bloglistController;
use App\Http\Controllers\admin\CreateAdmitCardController;
use App\Http\Controllers\admin\AdmitCardDetailsController;
use App\Http\Controllers\admin\resultController;
use App\Http\Controllers\admin\BranchAdmitCardController;
use App\Http\Controllers\admin\FeeSubmissionController;
use App\Http\Controllers\admin\FeeDetailsController;
use App\Http\Controllers\admin\TodayFeeCollectionController;
use App\Http\Controllers\admin\DueFeeReportController;
use App\Http\Controllers\admin\FeeReminderController;
use App\Http\Controllers\admin\AddDepartmentController;
use App\Http\Controllers\admin\AddEmployeeController;
use App\Http\Controllers\admin\EmployeeDetailsController;
use App\Http\Controllers\admin\AttendanceController;
use App\Http\Controllers\admin\AttendanceDetailsController;
use App\Http\Controllers\admin\LeaveTypeController;
use App\Http\Controllers\admin\NewsUpdateController;
use App\Http\Controllers\admin\EnquiryDetailsController;
use App\Http\Controllers\admin\AddCourseController;
use App\Http\Controllers\admin\CourseDetailsController;
use App\Http\Controllers\admin\DirectMarksheetCreateController;
use App\Http\Controllers\admin\MarksheetDetailsController;
use App\Http\Controllers\admin\MarksheetPendingController;
use App\Http\Controllers\admin\CertificateDetailsController;
use App\Http\Controllers\admin\NewTeacherImageuploadController;
use App\Http\Controllers\admin\TeacherImageDetailsController;
use App\Http\Controllers\admin\NewImageUploadGalleryController;
use App\Http\Controllers\admin\GalleryImageDetailsController;
use App\Http\Controllers\admin\NewStudentImageuploadController;
use App\Http\Controllers\admin\StudentImageDetailsController;



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

Route::get('admin-login', [LoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('admin-login', [LoginController::class, 'adminLoginPost'])->name('adminLoginPost');
// Route::get('add-new-enquiry', [EnquiryController::class, 'addNewEnquiry'])->name('addNewEnquiry');
// Route::get('list-enquiry', [EnquiryController::class, 'listEnquiry'])->name('listEnquiry');

Route::group(['prefix' => 'admin'], function () {
    Route::post('login', [LoginController::class, 'adminLoginPost'])->name('adminLoginPost');

    Route::group(['middleware' => 'AdminAuth'], function () {
        Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

        //Add Enqiry Details
        Route::get('add-new-enquiry', [EnquiryController::class, 'addNewEnquiry'])->name('addNewEnquiry');
        Route::post('add-new-enquiry', [EnquiryController::class, 'storeNewEnquiry'])->name('storeNewEnquiry');

        Route::get('list-enquiry', [EnquiryController::class, 'listEnquiry'])->name('listEnquiry');

        Route::post('del-enquiry', [EnquiryController::class, 'delEnquiry'])->name('delEnquiry');

        Route::get('new-student', [StudentController::class, 'newStudent'])->name('newStudent');
        Route::post('new-student', [StudentController::class, 'storeNewStudent'])->name('storeNewStudent');
        Route::get('new-blog', [BlogController::class, 'addblog'])->name('addblog');
    });
});