<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\EnquiryController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\FeesManController;
use App\Http\Controllers\admin\CourseMangController;

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\bloglistController;
use App\Http\Controllers\admin\CreateAdmitCardController;
use App\Http\Controllers\admin\AdmitCardDetailsController;
use App\Http\Controllers\admin\resultController;
use App\Http\Controllers\admin\BranchAdmitCardController;
use App\Http\Controllers\admin\FeeSubmissionController;
use App\Http\Controllers\admin\FeeDetailsController;
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
use App\Http\Controllers\admin\NewBranchAddController;
use App\Http\Controllers\admin\BranchDetailsController;
use App\Http\Controllers\admin\ExtraExpeneseController;
use App\Http\Controllers\admin\ExpeneseDetailsController;
use App\Http\Controllers\admin\AccountBalanceController;
use App\Http\Controllers\admin\FeeCollectionReportController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\admin\FeesController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| check
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('web.home');
});

Route::get('/Home', function () {
    return view('web.home');
});

Route::get('About', function () {
    return view('web.about');
});

Route::get('Declaration', function () {
    return view('web.declaration');
});

Route::get('Branches', function () {
    return view('web.branches');
});

Route::get('Software-Courses', function () {
    return view('web.software-courses');
});

Route::get('Final-Result', function () {
    return view('web.final-result');
});

Route::get('Semester-Result', function () {
    return view('web.semester-result');
});

Route::get('Branch-Student', function () {
    return view('web.branch-student');
});

Route::get('Head-Office-Student', function () {
    return view('web.head-office-student');
});

Route::get('Gallery', function () {
    return view('web.gallery');
});

Route::get('Contact', function () {
    return view('web.contact');
});

Route::get('Important-Links', function () {
    return view('web.important-links');
});

//master
// web managmnet 
// Route::get('test3', [WebsiteController::class, 'homePage'])->name('homePage');


Route::get('admin-login', [LoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('admin-login', [LoginController::class, 'adminLoginPost'])->name('adminLoginPost');

Route::group(['prefix' => 'admin'], function () {
    Route::post('login', [LoginController::class, 'adminLoginPost'])->name('adminLoginPost');

    Route::group(['middleware' => 'AdminAuth'], function () {
        Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

        //Enquiry Zone
        Route::get('add-new-enquiry', [EnquiryController::class, 'addNewEnquiry'])->name('addNewEnquiry');
        Route::post('add-new-enquiry', [EnquiryController::class, 'storeNewEnquiry'])->name('storeNewEnquiry');
        Route::get('list-enquiry', [EnquiryController::class, 'listEnquiry'])->name('listEnquiry');
        Route::post('del-enquiry', [EnquiryController::class, 'delEnquiry'])->name('delEnquiry');

        //Students
        Route::get('new-student', [StudentController::class, 'newStudent'])->name('newStudent');
        Route::get('student-list', [StudentController::class, 'studentList'])->name('studentList');
        Route::get('student-profile/{id}', [StudentController::class, 'studentProfile'])->name('studentProfile');
        Route::post('new-student', [StudentController::class, 'storeNewStudent'])->name('storeNewStudent');
        Route::post('del-student', [StudentController::class, 'delStudent'])->name('delStudent');
        Route::get('student-bday', [StudentController::class, 'studentDay'])->name('studentBday');
        Route::get('student-list-print', [StudentController::class, 'studentListprint'])->name('studentListprint');

        //Fees  
        Route::get('fee-submission', [FeesManController::class, 'feeSubmission'])->name('FeeSubmission');
        Route::get('fee-payment/{id}', [FeesManController::class, 'feePayment'])->name('feePayment');
        Route::post('fee-payment', [FeesManController::class, 'storeFeePayment'])->name('storeFeePayment');
        Route::get('fee-payment-print/{id}/{reg}', [FeesManController::class, 'feePaymentPrint'])->name('feePaymentPrint');
        Route::get('Fee_Details/', [FeesManController::class, 'FeeDetails'])->name('FeeDetails');
        Route::get('view-payment/{reg}', [FeesManController::class, 'viewPayment'])->name('viewPayment');
        Route::get('today-fee-collection/', [FeesManController::class, 'todayFeeCollection'])->name('todayFeeCollection');
        Route::get('due-Fee-report', [FeesManController::class, 'dueFeeReport'])->name('dueFeeReport');

        //course
        Route::get('course-management/', [CourseMangController::class, 'courseManage'])->name('courseManage');
        Route::get('course-subject-list/', [CourseMangController::class, 'courseSubjectList'])->name('courseSubjectList');
        Route::post('store-course-manage', [CourseMangController::class, 'storeCourseManage'])->name('storeCourseManage');

        //admit card
        Route::get('create-admit-card', [AdmitCardDetailsController::class, 'createAdmitCard'])->name('createAdmitCard');
        Route::get('admit-card-print', [AdmitCardDetailsController::class, 'admitCardPrint'])->name('admitCardPrint');

        //blog
        Route::get('new-blog', [BlogController::class, 'addblog'])->name('addblog');
        Route::post('new-blog', [BlogController::class, 'storeNewBlog'])->name('storeNewBlog');

        // Route::get('new-blog', [BlogController::class, 'addblog'])->name('addblog');
        Route::get('blog-list', [bloglistController::class, 'bloglist'])->name('bloglist');
        // Route::get('Create-Admit-Card', [CreateAdmitCardController::class, 'CreateAdmitCard'])->name('CreateAdmitCard');
        Route::get('Result', [ResultController::class, 'Result'])->name('Result');
        Route::get('Branch-Admit-Card', [BranchAdmitCardController::class, 'BranchAdmitCard'])->name('BranchAdmitCard');

        Route::get('Fee_Reminder', [FeeReminderController::class, 'FeeReminder'])->name('FeeReminder');
        Route::get('Add_Department', [AddDepartmentController::class, 'AddDepartment'])->name('AddDepartment');
        Route::get('Add_Employee', [AddEmployeeController::class, 'AddEmployee'])->name('AddEmployee');
        Route::get('Employee_Details', [EmployeeDetailsController::class, 'EmployeeDetails'])->name('EmployeeDetails');
        Route::get('Attendance', [AttendanceController::class, 'Attendance'])->name('Attendance');
        Route::get('Attendance_Details', [AttendanceDetailsController::class, 'AttendanceDetails'])->name('AttendanceDetails');
        Route::get('Leave_Type', [LeaveTypeController::class, 'LeaveType'])->name('LeaveType');
        Route::get('News_Update', [NewsUpdateController::class, 'NewsUpdate'])->name('NewsUpdate');
        Route::get('Enquiry_Details', [EnquiryDetailsController::class, 'EnquiryDetails'])->name('EnquiryDetails');
        Route::get('Add_Course', [AddCourseController::class, 'AddCourse'])->name('AddCourse');
        Route::get('Course_Details', [CourseDetailsController::class, 'CourseDetails'])->name('CourseDetails');
        Route::get('Direct_Marksheet_Create', [DirectMarksheetCreateController::class, 'DirectMarksheetCreate'])->name('DirectMarksheetCreate');
        Route::get('Marksheet_Details', [MarksheetDetailsController::class, 'MarksheetDetails'])->name('MarksheetDetails');
        Route::get('Marksheet_Pending', [MarksheetPendingController::class, 'MarksheetPending'])->name('MarksheetPending');
        Route::get('Certificate_Details', [CertificateDetailsController::class, 'CertificateDetails'])->name('CertificateDetails');
        Route::get('New_Teacher_Image_upload', [NewTeacherImageuploadController::class, 'NewTeacherImageupload'])->name('NewTeacherImageupload');
        Route::get('Teacher_Image_Details', [TeacherImageDetailsController::class, 'TeacherImageDetails'])->name('TeacherImageDetails');
        Route::get('New_Image_Upload_Gallery', [NewImageUploadGalleryController::class, 'NewImageUploadGallery'])->name('NewImageUploadGallery');
        Route::get('Gallery_Image_Details', [GalleryImageDetailsController::class, 'GalleryImageDetails'])->name('GalleryImageDetails');
        Route::get('New_Student_Image_upload', [NewStudentImageuploadController::class, 'NewStudentImageupload'])->name('NewStudentImageupload');
        Route::get('Student_Image_Details', [StudentImageDetailsController::class, 'StudentImageDetails'])->name('StudentImageDetails');
        Route::get('New_Branch_Add', [NewBranchAddController::class, 'NewBranchAdd'])->name('NewBranchAdd');
        Route::get('Branch_Details', [BranchDetailsController::class, 'BranchDetails'])->name('BranchDetails');
        Route::get('Extra_Expenese', [ExtraExpeneseController::class, 'ExtraExpenese'])->name('ExtraExpenese');
        Route::get('Expenese_Details', [ExpeneseDetailsController::class, 'ExpeneseDetails'])->name('ExpeneseDetails');
        Route::get('Account_Balance', [AccountBalanceController::class, 'AccountBalance'])->name('AccountBalance');
        Route::get('Fee_Collection_Report', [FeeCollectionReportController::class, 'FeeCollectionReport'])->name('FeeCollectionReport');

        Route::get('Fee_Collection_Report10', [FeeCollectionReportController::class, 'FeeCollectionReport10'])->name('FeeCollectionReport10');
        Route::get('Fee_Collection_Report4', [FeeCollectionReportController::class, 'FeeCollectionReport4'])->name('FeeCollectionReport5');
    });
});
