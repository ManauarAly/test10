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
            <h1 class="page-title">Software-Courses</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row grid">
                <div class="col-lg-4 col-md-6 grid-item filter1">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{ asset('web/assets/images/c1.jpg')}}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="course-single.html">The Art of Black and White Photography</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter4 filter1">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{ asset('web/assets/images/c2.jpg')}}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="course-single.html">The Art of Black and White Photography</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{ asset('web/assets/images/c3.jpg')}}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="course-single.html">The Art of Black and White Photography</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item filter1 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{ asset('web/assets/images/c4.jpg')}}" alt="">
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="course-single.html">The Art of Black and White Photography</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->
</div>
<!-- Main content End -->
@endsection