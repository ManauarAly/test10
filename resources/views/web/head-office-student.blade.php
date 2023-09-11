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
            <h1 class="page-title">HEAD OFFICE STUDENT PROFILE STATUS</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-4 m-auto col-md-push-4">
                    <div class="widget border p-3">
                        <h5 class="widget-title line-bottom">HEAD OFFICE STUDENT PROFILE STATUS
                        </h5>
                        <form class="quick-contact-form" action="" method="post">

                            <div class="form-group">
                                <input name="roll" class="form-control" type="text" required="" placeholder="Reg Number*..">
                            </div>
                            <select class="form-control" onchange="showUser(this.value)" name="course" required="">
                                <option value="">Select Courses</option>
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
                                <option value="Diploma in Pump Mechanical">Diploma in Pump Mechanical</option>
                                <option value=" P G Diploma ( Computer Application )"> P G Diploma ( Computer Application )</option>
                                <option value="ADPL">ADPL</option>
                                <option value="AC TECHNICIAN	">AC TECHNICIAN </option>
                                <option value="DIPLOMA IN FIRE AND SEFTY	">DIPLOMA IN FIRE AND SEFTY </option>
                                <option value="Diploma In Electronic">Diploma In Electronic</option>
                                <option value="Diploma  in Electrical  Technician">Diploma in Electrical Technician</option>
                                <option value="Diploma in Auto CAD">Diploma in Auto CAD</option>
                                <option value="PIPING &amp;  INSTRUMENT DRAWING">PIPING &amp; INSTRUMENT DRAWING</option>
                                <option value="CCM">CCM</option>
                                <option value="Diploma In Electrical">Diploma In Electrical</option>
                                <option value="Advance Excel">Advance Excel</option>
                                <option value="Advance Diploma In Refrigeration &amp; Air Condition">Advance Diploma In Refrigeration &amp; Air Condition</option>
                                <option value="Diploma in Industrial Safety Engineering">Diploma in Industrial Safety Engineering</option>
                                <option value="Diploma in Fire and Industrial Safety Management">Diploma in Fire and Industrial Safety Management</option>
                                <option value="Mechanic Motor Vehicle">Mechanic Motor Vehicle</option>
                                <option value="Diploma in Graphic Designing">Diploma in Graphic Designing</option>
                                <option value="DIPLOMA IN H.V.A.C">DIPLOMA IN H.V.A.C</option>
                                <option value="DIPLOMA IN INSTRUMENTATION">DIPLOMA IN INSTRUMENTATION</option>
                                <option value="P.G DIPLOMA IN FIRE &amp; INDUSTRIAL SAFETY MANAGEMENT">P.G DIPLOMA IN FIRE &amp; INDUSTRIAL SAFETY MANAGEMENT</option>
                                <option value="Typing (English)">Typing (English)</option>
                                <option value="DIPLOMA IN FITTER">DIPLOMA IN FITTER</option>
                                <option value="AutoCad (Architectural &amp; Civil)">AutoCad (Architectural &amp; Civil)</option>
                                <option value="Diploma In Desktop Publishing">Diploma In Desktop Publishing</option>
                                <option value="Diploma in Computer Hardware &amp; Networking">Diploma in Computer Hardware &amp; Networking</option>
                                <option value="Course On Video Editing">Course On Video Editing</option>
                                <option value="OMC (Office Management Course)">OMC (Office Management Course)</option>
                                <option value="A.D.C.H.N.">A.D.C.H.N.</option>
                                <option value="Advance Excel With Accounting">Advance Excel With Accounting</option>
                                <option value="Tally Prime With Accounting">Tally Prime With Accounting</option>
                                <option value="Diploma IN CCTV">Diploma IN CCTV</option>
                                <option value="Diploma In Textile Technology">Diploma In Textile Technology</option>
                                <option value="Diploma In Electronics And Telecommunication ">Diploma In Electronics And Telecommunication </option>
                                <option value="COURSE OF SEWING AND DESIGN">COURSE OF SEWING AND DESIGN</option>
                                <option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
                                <option value="Diploma In Beautician">Diploma In Beautician</option>
                                <option value="Diploma In Carpenter">Diploma In Carpenter</option>
                                <option value="Diploma In Electronic Technician ">Diploma In Electronic Technician </option>
                                <option value="Diploma In Solar Power Installation">Diploma In Solar Power Installation</option>
                                <option value="Diploma in Wastewater Treatment Plant Technician">Diploma in Wastewater Treatment Plant Technician</option>
                                <option value="Diploma in Welding">Diploma in Welding</option>
                                <option value="Course on M.S. office">Course on M.S. office</option>
                                <option value="AUTO ELECTRONIC">AUTO ELECTRONIC</option>
                                <option value="Diploma in Mechanical Pipe fitter (Plumber)	">Diploma in Mechanical Pipe fitter (Plumber) </option>
                                <option value="Diploma In Electronics And Telecommunication Engineering">Diploma In Electronics And Telecommunication Engineering</option>
                                <option value="GRINDER OPERATOR">GRINDER OPERATOR</option>
                            </select>


                            <div class="form-group mt-3">
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