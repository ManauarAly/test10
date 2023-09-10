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
            <h1 class="page-title">Contact</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="contact rs-popular-courses style1 orange-color pb-100 pt-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="container pt-6 pb-6">
                <div class="section-title mb-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="esc-heading small-border text-center">
                                <h3>Have any Questions?</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="contact-info text-center">
                                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                                <h4>Call Us</h4>
                                <h6 class="text-gray">Phone: +91-9161203786,<br>
                                    +91-9807007772,<br>
                                    +91-8858086838</h6>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="contact-info text-center">
                                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                                <h4>Address</h4>
                                <h6 class="text-gray">RTI (RAMA TECHNICAL INSTITUTE)
                                    Gorakhpur, Bhathat Bazar
                                    Dist : Gorakhpur (U.P)
                                    Pin Code : 273306</h6>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="contact-info text-center">
                                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                                <h4>Email</h4>
                                <h6 class="text-gray"> meraz@rti.in.net</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="divider bg-lighter p-4 pb-100">
            <div class="container">
                <div class="row pt-30">
                    <div class="col-md-7">
                        <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>

                        <!-- Contact Form -->
                        <form name="contact_form" class="" action="" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <small>*</small></label>
                                        <input name="a" class="form-control" type="text" placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <small>*</small></label>
                                        <input name="b" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone No. <small>*</small></label>
                                        <input name="c" class="form-control required" type="text" placeholder="Enter Your Number +91..">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Enter Your Subject</label>
                                        <input name="d" class="form-control" type="text" placeholder="Enter Your Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="e" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="send" class="btn btn-dark btn-theme-colored btn-flat" data-loading-text="Please wait...">Send your message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">

                        <!-- Google Map HTML Codes -->

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d889.5367244667979!2d83.48544937738917!3d26.8988326816667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfce0d3f836c70b40!2sRama+Technical+Institute!5e0!3m2!1sen!2sin!4v1536141534762" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>


                        <!-- Google Map Javascript Codes -->
                        <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                        <script src="js/google-map-init.js"></script>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Popular Courses Section End -->
</div>
<!-- Main content End -->
@endsection