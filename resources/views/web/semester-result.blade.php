@extends('web.webapp')
@section('content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('web/assets/images/breadcrumbs/2.jpg')}}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">SEMESTER RESULT</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-4 m-auto col-md-push-4">
                    <div class="widget border p-3">
                        <h5 class="widget-title line-bottom">STUDENT SEMESTER RESULT CHECK
                        </h5>
                        <form class="quick-contact-form" action="" method="post">

                            <div class="form-group">
                                <input name="roll" class="form-control" type="text" required="" placeholder="Reg Number*..">
                            </div>
                            <div class="form-group">
                                <!--<select name="semester" class="form-control" required>-->
                                <!--    <option value="">Select Semester</option>-->
                                <!--    <option value="I Semester">I Semester</option>-->
                                <!--    <option value="II Semester">II Semester</option>-->
                                <!--    <option value="III Semester">III Semester</option>-->
                                <!--</select>-->
                                <input name="exam_date" class="form-control" type="text" required="" placeholder="Exam date*...">
                            </div>

                            <div class="form-group">
                                <button type="submit" name="sub" class="btn btn-dark btn-theme-colored btn-sm mt-0" data-loading-text="Please wait...">Submit Now</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->
</div>
<!-- Main content End -->
@endsection