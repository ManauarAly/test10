@extends('web.webapp')
@section('content')
<div id="rs-banner" class="rs-banner style4">
    <div class="container relative">
        <div class="row relative">
            <div class="offset-lg-6"></div>
            <div class="col-lg-6 lg-pl-0">
                <div class="banner-line-shape js-tilt">
                    <!-- <img src="{{ asset('web/assets/images/banner/banner-line.png')}}" alt="Banner Circle Shape"> -->
                </div>
                <div class="banner-content pb-13">
                    <h1 class="banner-title white-color wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms" style="visibility: visible; animation-duration: 3000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                        Welcome To Rama Technical, Institute.</h1>
                    <div class="banner-btn wow fadeInUp" data-wow-delay="500ms" data-wow-duration="3000ms" style="visibility: visible; animation-duration: 3000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                        <a href="tel:9161203786" class="readon2 banner-style">Call Now</a>
                    </div>
                </div>
                <div class="banner-circle-shape js-tilt">
                    <img src="{{ asset('web/assets/images/banner/banner-circle.png')}}" alt="Banner Circle Shape">
                </div>
            </div>
        </div>
        <div class="banner-dots-shape js-tilt">
            <img src="{{ asset('web/assets/images/banner/banner-dots.png')}}" alt="Banner Dots Shape">
        </div>
    </div>
</div>

<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pl-60 order-last md-pl-15 md-mb-60">
                <div class="img-part js-tilt" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                    <img class="" src="{{ asset('web/assets/images/about/about3.png')}}" alt="">
                    <img class="shape top-center animated rotate infinite" src="{{ asset('web/assets/images/about/image-center-circle.png')}}" alt="Cirle Shape Img">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="sub-title primary">About Us</div>
                    <h2 class="title">Welcome to Rama Technical Institute</h2>
                    <div class="desc pt-3"><span>Rama Technical Institute</span> is a leading institute which provides complete
                        study material and total practical training. The classes are handled by highly qualified
                        experienced instructors. The diploma course has an hour’s theory class and two hours of
                        practical. There is a fast track course for those, who want to complete their course in 6 Month.
                    </div>
                    <div class="desc pt-3"><span>Rama Technical Institute</span> student will be in a position to assemble a
                        computer at the end of 3 to 4 Months of training. Students can also repair their own faulty
                        computer at the institute with the help of instructors if necessary. Students are given enough
                        practical training to locate faults at chip level. They also are given ample opportunities to
                        repair computers. New developments in computer technologies take place almost everyday. Rama
                        Technical Institute is particular to update its technology keeping with its latest developments.
                    </div>
                    <div class="desc pt-3"><span>Rama Technical Institute</span> is imparting technical education in electronics and
                        other Special computer language courses. Our ex-students are running their own units engaged in
                        manufacturing, repairing, networking, education and assembling of computers.</div>
                </div>
                <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                    <a class="readon2" href="#">Start Learning Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="rs-popular-courses" class="rs-popular-courses style5 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 text-center mb-45">
            <div class="sub-title primary"> Popular Courses</div>
            <h2 class="title mb-0">Latest Online Courses</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="#"><img src="{{ asset('web/assets/images/courses/home8/1.jpg')}}" alt=""></a>
                        </div>
                        <div class="content-part">
                            <div class="course-price">
                                <span class="price">$22.00</span>
                            </div>
                            <h3 class="title"><a href="#">ALL COMPUTER COURSE</a></h3>
                            <p>We will Provide well-designed Courses, fairly graded, helpful for students with a wide
                                range of abilities and experience. Curricula that are up-to-date and prepare students
                                with relevant knowledge and skills for leading-edge industrial jobs.The opportunity to
                                provide student a good job and placement in leading companies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="#"> <img src="{{ asset('web/assets/images/courses/home8/2.jpg')}}" alt=""></a>
                        </div>
                        <div class="content-part">
                            <div class="course-price">
                                <span class="price">$22.00</span>
                            </div>
                            <h3 class="title"><a href="#">DRA COURSES</a></h3>
                            <p>DRA Training mark as DRA stands for Debt Recovery Agent.The Debt ... The course Improves
                                employability and Career enhancement for the certified DRAs. Air Condition System & type
                                of Air Conditining System window A/C &Split. A/C Repairing & wiring & Domestic A/c
                                System...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="#"><img src="{{ asset('web/assets/images/courses/home8/3.jpg')}}" alt=""></a>
                        </div>
                        <div class="content-part">
                            <div class="course-price">
                                <span class="price">$22.00</span>
                            </div>
                            <h3 class="title"><a href="#">ALL COURSE PREPARATION</a></h3>
                            <p>Rama Technical classes is specialized Institute for JE/SSC/BANK/RAILWAY & other one day
                                exam.Regular , highly , qualified a trained teacher for full courses. Enhanstive ,
                                relevant and current study practices and test paper.The institute committed to provided
                                quality education to all its student</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3 class="text-theme-colored mt-0 mt-sm-30 mb-0">Our Mission</h3>
            <h2 class="text-theme-colored2 mt-0">And Vision</h2>

            <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                    <img src="{{ asset('web/assets/images/subject/icons/1.png')}}" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                    <div class="event-content pull-left flip">
                        <h3 class="event-title media-heading mt-15"><a href="#">Our Mission</a></h3>
                        <p>To overcome the gap between limited income group and expensive computer education.
                            To promote female contribution towards nation development.
                            To facilitate the computer use as virtual utility device.
                            To make comfortable rural and urban youth with computer utility.</p>
                    </div>
                </div>
            </div>



            <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                    <img src="{{ asset('web/assets/images/subject/icons/1.png')}}" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                    <div class="event-content pull-left flip">
                        <h3 class="event-title media-heading mt-15"><a href="#">Our Vission</a></h3>
                        <p>To emerge as a technical institute in computer education for identifying and narturing the
                            inner strength of youth and rural people, so that India can be transformed into a developed
                            nation by 2020.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-sm-6 mt-30">
                    <img src="{{ asset('web/assets/images/dc1.png')}}" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="p-3 mt-0 bg-theme-colored">
                        <h3 class="title-pattern mt-0"><span class="text-white">Request <span class="text-theme-color-2">Information</span></span></h3>
                        <!-- Appilication Form Start-->
                        <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <input placeholder="Enter Name" type="text" id="reservation_name" name="a" required="" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <input placeholder="Email" type="text" id="reservation_email" name="b" class="form-control" required="">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <input placeholder="Mobile No +91" type="text" id="reservation_name" name="c" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="styled-select">
                                            <select id="person_select" name="d" class="form-control" required="">
                                                <option>===SELECT COURSE===</option>
                                                <option value="CCA">CCA</option>
                                                <option value="DRA">DRA</option>
                                                <option value="DCA">DCA</option>
                                                <option value="ADCA">ADCA</option>
                                                <option value="Mechanical">Mechanical</option>
                                                <option value="Typing">Typing</option>
                                                <option value="DCHN">DCHN</option>
                                                <option value="Diploma in Electrician">Diploma in Electrician</option>
                                                <option value="Mobile Repairing	">Mobile Repairing </option>
                                                <option value="CCFA">CCFA</option>
                                                <option value="Electrical Diploma">Electrical Diploma</option>
                                                <option value="D.T.P">D.T.P</option>
                                                <option value="FITTER">FITTER</option>
                                                <option value="JCB OPERATOR">JCB OPERATOR</option>
                                                <option value="Diploma in Pump Mechanical">Diploma in Pump Mechanical
                                                </option>
                                                <option value=" P G Diploma ( Computer Application )"> P G Diploma (
                                                    Computer Application )</option>
                                                <option value="ADPL">ADPL</option>
                                                <option value="AC TECHNICIAN	">AC TECHNICIAN </option>
                                                <option value="DIPLOMA IN FIRE AND SEFTY	">DIPLOMA IN FIRE AND SEFTY
                                                </option>
                                                <option value="Diploma In Electronic">Diploma In Electronic</option>
                                                <option value="Diploma  in Electrical  Technician">Diploma in Electrical
                                                    Technician</option>
                                                <option value="Diploma in Auto CAD">Diploma in Auto CAD</option>
                                                <option value="PIPING &amp;  INSTRUMENT DRAWING">PIPING &amp; INSTRUMENT
                                                    DRAWING</option>
                                                <option value="CCM">CCM</option>
                                                <option value="Diploma In Electrical">Diploma In Electrical</option>
                                                <option value="Advance Excel">Advance Excel</option>
                                                <option value="Advance Diploma In Refrigeration &amp; Air Condition">
                                                    Advance Diploma In Refrigeration &amp; Air Condition</option>
                                                <option value="Diploma in Industrial Safety Engineering">Diploma in
                                                    Industrial Safety Engineering</option>
                                                <option value="Diploma in Fire and Industrial Safety Management">Diploma
                                                    in Fire and Industrial Safety Management</option>
                                                <option value="Mechanic Motor Vehicle">Mechanic Motor Vehicle</option>
                                                <option value="Diploma in Graphic Designing">Diploma in Graphic
                                                    Designing</option>
                                                <option value="DIPLOMA IN H.V.A.C">DIPLOMA IN H.V.A.C</option>
                                                <option value="DIPLOMA IN INSTRUMENTATION">DIPLOMA IN INSTRUMENTATION
                                                </option>
                                                <option value="P.G DIPLOMA IN FIRE &amp; INDUSTRIAL SAFETY MANAGEMENT">
                                                    P.G DIPLOMA IN FIRE &amp; INDUSTRIAL SAFETY MANAGEMENT</option>
                                                <option value="Typing (English)">Typing (English)</option>
                                                <option value="DIPLOMA IN FITTER">DIPLOMA IN FITTER</option>
                                                <option value="AutoCad (Architectural &amp; Civil)">AutoCad
                                                    (Architectural &amp; Civil)</option>
                                                <option value="Diploma In Desktop Publishing">Diploma In Desktop
                                                    Publishing</option>
                                                <option value="Diploma in Computer Hardware &amp; Networking">Diploma in
                                                    Computer Hardware &amp; Networking</option>
                                                <option value="Course On Video Editing">Course On Video Editing</option>
                                                <option value="OMC (Office Management Course)">OMC (Office Management
                                                    Course)</option>
                                                <option value="A.D.C.H.N.">A.D.C.H.N.</option>
                                                <option value="Advance Excel With Accounting">Advance Excel With
                                                    Accounting</option>
                                                <option value="Tally Prime With Accounting">Tally Prime With Accounting
                                                </option>
                                                <option value="Diploma IN CCTV">Diploma IN CCTV</option>
                                                <option value="Diploma In Textile Technology">Diploma In Textile
                                                    Technology</option>
                                                <option value="Diploma In Electronics And Telecommunication ">Diploma In
                                                    Electronics And Telecommunication </option>
                                                <option value="COURSE OF SEWING AND DESIGN">COURSE OF SEWING AND DESIGN
                                                </option>
                                                <option value="Diploma in Mechanical Engineering">Diploma in Mechanical
                                                    Engineering</option>
                                                <option value="Diploma In Beautician">Diploma In Beautician</option>
                                                <option value="Diploma In Carpenter">Diploma In Carpenter</option>
                                                <option value="Diploma In Electronic Technician ">Diploma In Electronic
                                                    Technician </option>
                                                <option value="Diploma In Solar Power Installation">Diploma In Solar
                                                    Power Installation</option>
                                                <option value="Diploma in Wastewater Treatment Plant Technician">Diploma
                                                    in Wastewater Treatment Plant Technician</option>
                                                <option value="Diploma in Welding">Diploma in Welding</option>
                                                <option value="Course on M.S. office">Course on M.S. office</option>
                                                <option value="AUTO ELECTRONIC">AUTO ELECTRONIC</option>
                                                <option value="Diploma in Mechanical Pipe fitter (Plumber)	">Diploma in
                                                    Mechanical Pipe fitter (Plumber) </option>
                                                <option value="Diploma In Electronics And Telecommunication Engineering">
                                                    Diploma In Electronics And Telecommunication Engineering</option>
                                                <option value="GRINDER OPERATOR">GRINDER OPERATOR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <input type="text" value="RTI0011685" required="" readonly="" class="form-control">

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="styled-select">
                                            <select class="form-control" onchange="showUser(this.value)" name="select_branch" required="">
                                                <option value="Bhathat">===SELECT BRANCH===</option>
                                                <option value="RAMA TECHNICAL INSTITUTE AHIRAULI">RAMA TECHNICAL
                                                    INSTITUTE AHIRAULI</option>
                                                <option value="RAMA TECHNICAL INSTITUTE GHUGHALI">RAMA TECHNICAL
                                                    INSTITUTE GHUGHALI</option>
                                                <option value="RAMA TECHNICAL INSTITUTE LATGHAT">RAMA TECHNICAL
                                                    INSTITUTE LATGHAT</option>
                                                <option value="RTI PARTAWAL.">RTI PARTAWAL.</option>
                                                <option value="RTI  RAMKOLA">RTI RAMKOLA</option>
                                                <option value="RTI SISWA BAZAR">RTI SISWA BAZAR</option>
                                                <option value="RTI  RAMPURWAN">RTI RAMPURWAN</option>
                                                <option value="RTI MADHUBANI">RTI MADHUBANI</option>
                                                <option value="GLOBAL INSTITUTE OF COMPUTER EDUCATION">GLOBAL INSTITUTE
                                                    OF COMPUTER EDUCATION</option>
                                                <option value="RTI PANIYARA">RTI PANIYARA</option>
                                                <option value="RTI BARIGAON">RTI BARIGAON</option>
                                                <option value="RTI KATAHARI">RTI KATAHARI</option>
                                                <option value="RTI CHIUTAHA">RTI CHIUTAHA</option>
                                                <option value="RTI  CHIURAHA ROAD">RTI CHIURAHA ROAD</option>
                                                <option value="RTI MOHANA BAZAR">RTI MOHANA BAZAR</option>
                                                <option value="RTI BARGADWA BAZAR">RTI BARGADWA BAZAR</option>
                                                <option value="RTI BASANTPUR">RTI BASANTPUR</option>
                                                <option value="RTI SAMARDHIRA MAHARAJGANJ">RTI SAMARDHIRA MAHARAJGANJ
                                                </option>
                                                <option value="RTI ADDA BAZAR">RTI ADDA BAZAR</option>
                                                <option value="HI-TECH COMPUTER EDUCATION WORLD">HI-TECH COMPUTER
                                                    EDUCATION WORLD</option>
                                                <option value="RAMA TECHNICAL INSTITUTE MANIRAM">RAMA TECHNICAL
                                                    INSTITUTE MANIRAM</option>
                                                <option value="RAMA TECHNICAL INSTITUTE PIPIGANJ">RAMA TECHNICAL
                                                    INSTITUTE PIPIGANJ</option>
                                                <option value="RAMA TECHNICAL INSTITUTE BARGADAHI">RAMA TECHNICAL
                                                    INSTITUTE BARGADAHI</option>
                                                <option value="RAMA TECHNICAL INSTITUTE SHAHI MARKET GKP">RAMA TECHNICAL
                                                    INSTITUTE SHAHI MARKET GKP</option>
                                                <option value="RTI ALI">RTI ALI</option>
                                                <option value="RAMA TECHNICAL INSTITUTE HATA KUSHINAGAR">RAMA TECHNICAL
                                                    INSTITUTE HATA KUSHINAGAR</option>
                                                <option value="RAMA TECHNICAL INSTITUTE CAMPIERGANJ">RAMA TECHNICAL
                                                    INSTITUTE CAMPIERGANJ</option>
                                                <option value="RAMA TECHNICAL INSTITUTE BARGADAHI">RAMA TECHNICAL
                                                    INSTITUTE BARGADAHI</option>
                                                <option value="GENIUS COMPUTER TRAINING INSTITUTE">GENIUS COMPUTER
                                                    TRAINING INSTITUTE</option>
                                                <option value="RAMA TECHNICAL INSTITUTE RAMNAGAR">RAMA TECHNICAL
                                                    INSTITUTE RAMNAGAR</option>
                                                <option value="RTI MATHAULI">RTI MATHAULI</option>
                                                <option value="ali2sujayat khan">ali2sujayat khan</option>
                                                <option value="RAMA TECHNICAL INSTITUTE GOLHAURA BANSI">RAMA TECHNICAL
                                                    INSTITUTE GOLHAURA BANSI</option>
                                                <option value="RAMA TECHNICAL INSTITUTE BOJHI BAZAR ">RAMA TECHNICAL
                                                    INSTITUTE BOJHI BAZAR </option>
                                                <option value="text00">text00</option>
                                                <option value="HI-TECH COMPUTER EDUCATION WORLD ">HI-TECH COMPUTER
                                                    EDUCATION WORLD </option>
                                                <option value="RAMA TECHNICAL INSTITUTE JAGDISHPUR">RAMA TECHNICAL
                                                    INSTITUTE JAGDISHPUR</option>
                                                <option value="HI-TECH COMPUTER EDUCATION WORLD MAHARAJGANJ">HI-TECH
                                                    COMPUTER EDUCATION WORLD MAHARAJGANJ</option>
                                                <option value="RAMA TECHNICAL INSTITUTE MANSOORGANJ">RAMA TECHNICAL
                                                    INSTITUTE MANSOORGANJ</option>
                                                <option value="RAMA TECHNICAL INSTITUTE BELWA">RAMA TECHNICAL INSTITUTE
                                                    BELWA</option>
                                                <option value="RAMA TECHNICAL INSTITUTE KAPTANGANJ">RAMA TECHNICAL
                                                    INSTITUTE KAPTANGANJ</option>
                                                <option value="RAMA TECHNICAL INSTITUTE JAKHIRA">RAMA TECHNICAL
                                                    INSTITUTE JAKHIRA</option>
                                                <option value="RAMA TECHNICAL INSTITUTE">RAMA TECHNICAL INSTITUTE
                                                </option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value="RAMA TECHNICAL INSTITUTE IMILIYA AZAMGARH">RAMA TECHNICAL
                                                    INSTITUTE IMILIYA AZAMGARH</option>
                                                <option value="RAMA TECHNICAL INSTITUTE KHAROH CHUARAHA">RAMA TECHNICAL
                                                    INSTITUTE KHAROH CHUARAHA</option>
                                                <option value="TEXT">TEXT</option>
                                                <option value="RAMA TECHNICAL INSTITUTE DHANI BAZAR">RAMA TECHNICAL
                                                    INSTITUTE DHANI BAZAR</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea placeholder="Enter Message" rows="3" class="form-control required" name="e" id="form_message" aria-required="true"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-0 mt-10">
                                        <button type="submit" name="sub1" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Application Form End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rs-subject style1 pt-94 pb-70 md-pt-64 md-pb-40">
    <div class="container">
        <div class="sec-title mb-60 text-center md-mb-30 col-md-7 m-auto">
            <h2 class="title mb-0">Our Facilities</h2>
            <p>Rama Technical Institute of Computer Education has gained a reputation for itself for its professional
                training and various courses alongwith a lot of facilities.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="subject-wrap bgc1">
                    <img src="{{ asset('web/assets/images/subject/icons/1.png')}}" alt="">
                    <h4 class="title"><a href="#">Our Accerediting</a></h4>
                    <span class="course-qnty">Rama Technical provides different types of certificate courses according
                        to current demand in the field of Information Technology.</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="subject-wrap bgc2 text-light">
                    <img src="{{ asset('web/assets/images/subject/icons/2.png')}}" alt="">
                    <h4 class="title"><a href="#">Best Teachers</a></h4>
                    <span class="course-qnty">We have well qalified & experienced faculty.
                        Rama Technical Institute Of Computer Institute.</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="subject-wrap bgc3">
                    <img src="{{ asset('web/assets/images/subject/icons/3.png')}}" alt="">
                    <h4 class="title"><a href="#">Excellent Lab</a></h4>
                    <span class="course-qnty">1PC /1 Student Intelligence is an important factor in how the individual
                        responds to education.</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="subject-wrap bgc4">
                    <img src="{{ asset('web/assets/images/subject/icons/4.png')}}" alt="">
                    <h4 class="title"><a href="#">Large Library</a></h4>
                    <span class="course-qnty">we are provide all students books and bag. we are provide pure R.O water.
                        we are also provide best environment students on here for education.</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="subject-wrap bgc5">
                    <img src="{{ asset('web/assets/images/subject/icons/5.png')}}" alt="">
                    <h4 class="title"><a href="#">Full Power Backup Facility.</a></h4>
                    <span class="course-qnty">Rama technical Computer Institute
                        are provide full power backup facility when electricty will we be cut..</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="subject-wrap bgc6">
                    <img src="{{ asset('web/assets/images/subject/icons/6.png')}}" alt="">
                    <h4 class="title"><a href="#">Wifi Facility</a></h4>
                    <span class="course-qnty">Internet facility is provided to all students in the Rama Technical
                        Institute of Computer Education.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 text-center mb-50">
            <h2 class="title"> MORE BRANCH</h2>
            <div class="sub-title">We have well qalified & experienced faculty.</div>
        </div>
        <div class="rs-carousel owl-carousel owl-loaded owl-drag" data-loop="true" data-items="1" data-margin="10" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">

            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item active">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="{{ asset('web/assets/images/blog/style2/3.jpg')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>April 25, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Shutdown of schools extended to Aug 31 </a>
                                </h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits.
                                    Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="rs-view-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="section-title text-center mt-0">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-auto">
                <h2 class="mt-0 line-height-1 text-dark">Our <span class="text-theme-colored2">Students</span> Say</h2>
                <p class="text-dark">Rama Technical Institute provide of different type of education like that technical
                    non technical preparation nad much more..</p>
            </div>
        </div>
    </div>
    <div class="section-content">
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-wrapper text-center bg-theme-colored p-3">
                    <div class="thumb mb-30">
                        <img class="img-circle img-thumbnail" alt="" src="{{ asset('web/assets/images/blog/style2/3.jpg')}}">
                    </div>
                    <div class="content">
                        <p class="text-white">Give a man one rupee and you serve him for a day, Teach a man to earn one
                            rupee and you serve him for a life’. All the training programs are designed and developed by
                            the team of experts as per the industry input. I feel grateful to all our students and
                            associates who have inspired us by their wholehearted support and true feedback. It is our
                            utmost satisfaction when our student is placed in various companies and firms on completion
                            of his/her.</p>
                        <h4 class="author text-white mb-0">Shashi</h4>
                        <h6 class="title text-white mt-0 mb-15">Student</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-wrapper text-center bg-theme-colored p-3">
                    <div class="thumb mb-30"><img class="img-circle img-thumbnail" alt="" src="{{ asset('web/assets/images/blog/style2/3.jpg')}}"></div>
                    <div class="content">
                        <p class="text-white">Rama Technical Institute technologies is not only professional in teaching
                            international students, but the school is also good at taking care of students. .

                            I believe in student centred approach so that the problems , needs and priority issues can
                            be addressed in participatory manner that will deal with efficiency In work. For many people
                            the computer education is unaffordable, but our efforts is to make it choice..</p>
                        <h4 class="author text-white mb-0">Ajay</h4>
                        <h6 class="title text-white mt-0 mb-15">Student</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-wrapper text-center bg-theme-colored p-3">
                    <div class="thumb mb-30"><img class="img-circle img-thumbnail" alt="" src="{{ asset('web/assets/images/blog/style2/3.jpg')}}"></div>
                    <div class="content">
                        <p class="text-white">Any educational institute becomes the best not only because of its quality
                            faculty, high standards of teaching, and world-class infrastructure, but also because of the
                            students’ calibre. The students make the differenceThe institute’s campus is located at the
                            national route gorakhpur to nepal via mahrajganj and is architecturally planned and provides
                            a perfect learning environment to students. </p>
                        <h4 class="author text-white mb-0">Ali</h4>
                        <h6 class="title text-white mt-0 mb-15">Student</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="section-title text-center mt-4">
        <div class="row pt-4">
            <div class="col-md-8 pt-4 col-md-offset-2 m-auto">
                <h2 class="mt-0 line-height-1 text-dark">Our Toppers Student List</h2>
            </div>
        </div>
    </div>
    <div class="section-content mb-4">
        <div class="row">
            <div class="col-md-2">
                <div class="testimonial-wrapper text-center bg-theme-colored p-3">

                </div>
            </div>
            <div class="col-md-2">
                <div class="testimonial-wrapper text-center bg-theme-colored p-3">

                </div>
            </div>
            <div class="col-md-2">
                <div class="testimonial-wrapper text-center bg-theme-colored p-3">

                </div>
            </div>
            <div class="col-md-2">
                <div class="testimonial-wrapper text-center bg-theme-colored p-3">

                </div>
            </div>
            <div class="col-md-2">
                <div class="testimonial-wrapper text-center bg-theme-colored p-3">

                </div>
            </div>
            <div class="col-md-2">
                <div class="testimonial-wrapper text-center bg-theme-colored p-3">

                </div>
            </div>
        </div>
    </div>
</div> 
@endsection