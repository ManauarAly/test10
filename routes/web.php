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
        Route::get('new-blog', [BlogController::class, 'addblog'])->name('addblog');
        Route::get('blog-list', [bloglistController::class, 'bloglist'])->name('bloglist');
        Route::get('Create-Admit-Card', [CreateAdmitCardController::class, 'CreateAdmitCard'])->name('CreateAdmitCard');
        Route::get('Admit-Card-Details', [AdmitCardDetailsController::class, 'AdmitCardDetails'])->name('AdmitCardDetails');
        Route::get('Result', [ResultController::class, 'Result'])->name('Result');
        Route::get('Branch-Admit-Card', [BranchAdmitCardController::class, 'BranchAdmitCard'])->name('BranchAdmitCard');
        Route::get('Fee-Submission', [FeeSubmissionController::class, 'FeeSubmission'])->name('FeeSubmission');
        Route::get('Fee_Details', [FeeDetailsController::class, 'FeeDetails'])->name('FeeDetails');
        Route::get('Today_Fee_Collection', [TodayFeeCollectionController::class, 'TodayFeeCollection'])->name('TodayFeeCollection');
        Route::get('Due_Fee_Report', [DueFeeReportController::class, 'DueFeeReport'])->name('DueFeeReport');
        Route::get('Fee_Reminder', [FeeReminderController::class, 'FeeReminder'])->name('FeeReminder');
        
    
    });
});
