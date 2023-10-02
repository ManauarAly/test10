<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">RTI Branch </h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}" class="">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Enquiry Zone </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('branchNewEnquiry')}}"><i class="bx bx-right-arrow-alt"></i>Add New Enquiry </a>
                </li>
                <li>
                    <a href="{{route('branchlistEnquiry')}}"><i class="bx bx-right-arrow-alt"></i>List Enquiry</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-book-reader"></i>
                </div>
                <div class="menu-title">Students</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('branchnewStudent')}}"><i class="bx bx-right-arrow-alt"></i>New Admission</a>
                </li>
                <li> 
                    <a href="{{route('branchstudentList')}}"><i class="bx bx-right-arrow-alt"></i>Student List</a>
                </li>
                <li>
                    <a href="{{route('branchstudentDay')}}"><i class="bx bx-right-arrow-alt"></i>Student Bday</a>
                </li>
                <li>
                    <a href="{{route('branchstudentListprint')}}"><i class="bx bx-right-arrow-alt"></i>Print Student List</a>
                </li>
                <li>
                    <a href="{{route('branchcourseManage')}}"><i class="bx bx-right-arrow-alt"></i>Course Management</a>
                </li>
                <li>
                    <a href="{{route('branchstudentIdcard')}}"><i class="bx bx-right-arrow-alt"></i>Head Office ID Card</a>
                </li>
                <li>
                    <a href="#"><i class="bx bx-right-arrow-alt"></i>Branch ID Card</a>
                </li>
            </ul>
        </li>

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-receipt"></i>
                </div>
                <div class="menu-title">Blogs</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('addblog')}}"><i class="bx bx-right-arrow-alt"></i>Add Blog</a>
                </li>
                <li>
                    <a href="{{route('bloglist')}}"><i class="bx bx-right-arrow-alt"></i>Blog List</a>
                </li>
            </ul>
        </li> -->

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-id-card"></i>
                </div>
                <div class="menu-title">Admit Card</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('branchcreateAdmitCard')}}"><i class="bx bx-right-arrow-alt"></i>Create Admit Card</a>
                </li>
                <li>
                    <a href="{{route('branchadmitCardDtails')}}"><i class="bx bx-right-arrow-alt"></i>Admit Card Details</a>
                </li>
                <li> {{--{{route('branchviewMarksheet')}}--}}
                    <a href="#"><i class="bx bx-right-arrow-alt"></i>Result</a>
                </li>
                <li>
                    <a href="{{route('branchhAdmitCard')}}"><i class="bx bx-right-arrow-alt"></i>Branch Admit Card</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-rupee"></i>
                </div>
                <div class="menu-title">Fee Management</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('branchfeeSubmission')}}"><i class="bx bx-right-arrow-alt"></i>Fee Submission</a>
                </li>
                <li>
                    <a href="{{route('branchFeeDetails')}}"><i class="bx bx-right-arrow-alt"></i>Fee Details</a>
                </li>
                <li>
                    <a href="{{route('branchtodayFeeCollection')}}"><i class="bx bx-right-arrow-alt"></i>Today Fee Collection</a>
                </li>
                <li>
                    <a href="{{route('branchdueFeeReport')}}"><i class="bx bx-right-arrow-alt"></i>Due Fee Report</a>
                </li>
                <li>
                    <a href="{{route('branchFeeReminder')}}"><i class="bx bx-right-arrow-alt"></i>Fee Reminder</a>
                </li>
            </ul>
        </li>

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Employee Management</div>
            </a>
            <ul>
                <li><a href="{{route('AddDepartment')}}">
                        <i class="bx bx-right-arrow-alt"></i> Add Department</a>
                </li>
                <li><a href="{{route('AddEmployee')}}">
                        <i class="bx bx-right-arrow-alt"></i> Add Employee</a>
                </li>
                <li><a href="{{route('EmployeeDetails')}}"><i class="bx bx-right-arrow-alt"></i>
                        Employee Details</a>
                </li>
                <li><a href="{{route('Attendance')}}"><i class="bx bx-right-arrow-alt"></i>
                        Attendance</a>
                </li>
                <li><a href="{{route('AttendanceDetails')}}"><i class="bx bx-right-arrow-alt"></i>
                        Attendance Details</a>
                </li>
                <li><a href="{{route('LeaveType')}}"><i class="bx bx-right-arrow-alt"></i>
                        Leave Type</a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="{{route('NewsUpdate')}}" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-pen"></i>
                </div>
                <div class="menu-title">News Update</div>
            </a>
        </li> -->

        <!-- <li>
            <a href="{{route('EnquiryDetails')}}" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-book"></i>
                </div>
                <div class="menu-title">Enquiry Details </div>
            </a>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-spreadsheet"></i>
                </div>
                <div class="menu-title">Website Course Add</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('AddCourse')}}"><i class="bx bx-right-arrow-alt"></i>Add Course</a>
                </li>
                <li>
                    <a href="{{route('CourseDetails')}}"><i class="bx bx-right-arrow-alt"></i>Course Details</a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-cloud"></i>
                </div>
                <div class="menu-title">Create Marksheet New</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('DirectMarksheetCreate')}}"><i class="bx bx-right-arrow-alt"></i>Direct Marksheet Create</a>
                </li>
                <li>
                    <a href="{{route('MarksheetDetails')}}"><i class="bx bx-right-arrow-alt"></i>Marksheet Details</a>
                </li>
                <li>
                    <a href="{{route('MarksheetPending')}}"><i class="bx bx-right-arrow-alt"></i>Marksheet Pending</a>
                </li>
                <li>
                    <a href="{{route('CertificateDetails')}}"><i class="bx bx-right-arrow-alt"></i>Certificate Details</a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-image"></i>
                </div>
                <div class="menu-title">Teacher Image Upload</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('NewTeacherImageupload')}}"><i class="bx bx-right-arrow-alt"></i>New Teacher Image upload</a>
                </li>
                <li>
                    <a href="{{route('TeacherImageDetails')}}"><i class="bx bx-right-arrow-alt"></i>Teacher Image Details</a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-image-alt"></i>
                </div>
                <div class="menu-title">Gallery Image Upload</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('NewImageUploadGallery')}}"><i class="bx bx-right-arrow-alt"></i>New Image Upload Gallery</a>
                </li>
                <li>
                    <a href="{{route('GalleryImageDetails')}}"><i class="bx bx-right-arrow-alt"></i>Gallery Image Details</a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-image"></i>
                </div>
                <div class="menu-title">Student Image Upload</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('NewStudentImageupload')}}"><i class="bx bx-right-arrow-alt"></i>New Student Image upload</a>
                </li>
                <li>
                    <a href="{{route('StudentImageDetails')}}"><i class="bx bx-right-arrow-alt"></i>Student Image Details</a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-git-branch"></i>
                </div>
                <div class="menu-title">Branch Website Add</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('NewBranchAdd')}}"><i class="bx bx-right-arrow-alt"></i>New Branch Add</a>
                </li>
                <li>
                    <a href="{{route('BranchDetails')}}"><i class="bx bx-right-arrow-alt"></i>Branch Details</a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Account/Finance</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('ExtraExpenese')}}"><i class="bx bx-right-arrow-alt"></i>Extra Expenese</a>
                </li>
                <li>
                    <a href="{{route('ExpeneseDetails')}}"><i class="bx bx-right-arrow-alt"></i>Expenese Details</a>
                </li>
                <li>
                    <a href="{{route('AccountBalance')}}"><i class="bx bx-right-arrow-alt"></i>Account Balance</a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-pie-chart"></i>
                </div>
                <div class="menu-title">Report</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('FeeCollectionReport')}}"><i class="bx bx-right-arrow-alt"></i>Fee Collection Report</a>
                </li>
            </ul>
        </li> -->
<!-- 
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-git-branch"></i>
                </div>
                <div class="menu-title">Branch Manag</div>
            </a>
            <ul>
                <li>
                    <a href="#"><i class="bx bx-right-arrow-alt"></i>Add New Branch</a>
                </li>
                <li>
                    <a href="#"><i class="bx bx-right-arrow-alt"></i>Branch Details</a>
                </li>
                <li>
                    <a href="#"><i class="bx bx-right-arrow-alt"></i>All Student Of Branch Details</a>
                </li>
            </ul>
        </li> -->

        <!-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Administrator</div>
            </a>
            <ul>
                <li>
                    <a href="#"><i class="bx bx-right-arrow-alt"></i>Change Password</a>
                </li>
                <li>
                    <a href="#"><i class="bx bx-right-arrow-alt"></i>Service Tax</a>
                </li>
            </ul>
        </li> -->

        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Agent Manage</div>
            </a>
            <ul>
                <li> <a href="{{ route('addNewAgent')}}"><i class="bx bx-right-arrow-alt"></i>Add New Agent</a>
        </li>
        <li> <a href="{{ route('agentList')}}"><i class="bx bx-right-arrow-alt"></i>List Agents</a>
        </li>

    </ul>
    </li>
    <li class="menu-label">Report Filter</li>
    <li>
        <a href="widgets.html">
            <div class="parent-icon"><i class='bx bx-border-outer'></i>
            </div>
            <div class="menu-title">Agent Report</div>
        </a>
    </li>


    <li>
        <a href="#!" target="_blank">
            <div class="parent-icon"><i class="bx bx-male"></i>
            </div>
            <div class="menu-title">Candidate Report</div>
        </a>
    </li>
    <li>
        <a href="#!" target="_blank">
            <div class="parent-icon"><i class="bx bx-dollar"></i>
            </div>
            <div class="menu-title">Amount Filter</div>
        </a>
    </li>--}}
    <li>
        <a href="#!" target="_blank">
            <div class="parent-icon"><i class="bx bx-log-out-circle"></i>
            </div>
            <div class="menu-title">Logout</div>
        </a>
    </li>
    </ul>
    <!--end navigation-->
</div>