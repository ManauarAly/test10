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
            <h1 class="page-title">STUDENT RESULT STATUS</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="col-md-10 m-auto col-sm-12 col-xs-12 col-md-offset-1">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your Roll  Number.!" name="stcode" style="background-color:none; color:#FF0000; border:2px solid #003333; height:45px;">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="sujayat" style="background-color:none; color:#FF0000; border:2px solid #003333;">
                                <i class="fa fa-search fa-2x"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->
</div>
<!-- Main content End -->
@endsection