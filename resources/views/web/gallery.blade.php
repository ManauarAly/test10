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
            <h1 class="page-title">Gallery</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/1.jpg')}}"><img src="{{ asset('web/assets/images/gallery/1.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/2.jpg')}}"><img src="{{ asset('web/assets/images/gallery/2.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/3.jpg')}}"><img src="{{ asset('web/assets/images/gallery/3.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/4.jpg')}}"><img src="{{ asset('web/assets/images/gallery/4.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/5.jpg')}}"><img src="{{ asset('web/assets/images/gallery/5.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/6.jpg')}}"><img src="{{ asset('web/assets/images/gallery/6.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/7.jpg')}}"><img src="{{ asset('web/assets/images/gallery/7.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/8.jpg')}}"><img src="{{ asset('web/assets/images/gallery/8.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/9.jpg')}}"><img src="{{ asset('web/assets/images/gallery/9.jpg')}}" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/10.jpg')}}"><img src="{{ asset('web/assets/images/gallery/10.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 sm-mb-30 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/11.jpg')}}"><img src="{{ asset('web/assets/images/gallery/11.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('web/assets/images/gallery/12.jpg')}}"><img src="{{ asset('web/assets/images/gallery/12.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->
</div>
<!-- Main content End -->
@endsection