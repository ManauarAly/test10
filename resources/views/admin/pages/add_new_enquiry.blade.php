@extends('admin.app')
@section('main')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add New </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Enquiry Now</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="" class="btn btn-primary">List Enquiry</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded"> 
                        <form class="row g-3 needs-validation bv-form" method="post" id="enq_form" enctype="multipart/form-data" action="http://127.0.0.1:8000/admin/add-new-enquiry" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                <input type="hidden" name="_token" value="EVQKX5D6oa87L4z7Sl1kqCCAaz8kaRthNpoDyQXi">                                <div class="col-md-3">
                                    <label for="enq_session" class="form-label">Session</label>
                                    <select class="single-select select2-hidden-accessible" name="enq_session" id="trv_count" data-select2-id="trv_count" tabindex="-1" aria-hidden="true" data-bv-field="enq_session">
                                        <option value="" data-select2-id="2">Select</option>
                                                                                    <option value="2016-2017">2012 </option>
                                                                                    <option value="2016-2017">2013 </option>
                                                                                    <option value="2016-2017">2014 </option>
                                                                                    <option value="2016-2017">2015 </option>
                                                                                    <option value="2016-2017">2016 </option>
                                                                                    <option value="2016-2017">2017 </option>
                                                                                    <option value="2016-2017">2018 </option>
                                                                                    <option value="2016-2017">2019 </option>
                                                                                    <option value="2016-2017">2020 </option>
                                                                                    <option value="2016-2017">2021 </option>
                                                                                    <option value="2016-2017">2022 </option>
                                                                                    <option value="2016-2017">2023 </option>
                                                                                    <option value="2016-2017">2024 </option>
                                                                            </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="1"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-trv_count-container"><span class="select2-selection__rendered" id="select2-trv_count-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_session" data-bv-result="NOT_VALIDATED" style="display: none;">Session is requred.</small></div>
                               
                                <div class="col-md-3">
                                    <label for="enq_no" class="form-label">Enq No *</label>
                                    <input type="text" class="form-control" name="enq_no" id="enq_no" value="ENQ_NO_12345" data-bv-field="enq_no">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_no" data-bv-result="NOT_VALIDATED" style="display: none;">Enq No is requred.</small></div>
                                
                                <div class="col-md-3">
                                    <label for="enq_stu_name" class="form-label">Student Name *</label>
                                    <input type="text" class="form-control" name="enq_stu_name" id="enq_stu_name" value="" placeholder="Enter student" data-bv-field="enq_stu_name">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_stu_name" data-bv-result="NOT_VALIDATED" style="display: none;">Student Name is requred.</small></div>

                                <div class="col-md-3">
                                    <label for="enq_course" class="form-label">Course *</label>  
                                    <select class="form-control" name="enq_course" data-bv-field="enq_course">
                                        <option value="">Select</option>
                                        <option value="CCA">CCA</option><option value="DRA">DRA</option><option value="DCA">DCA</option><option value="ADCA">ADCA</option><option value="Mechanical">Mechanical</option><option value="Typing">Typing</option><option value="DCHN">DCHN</option><option value="Diploma in Electrician">Diploma in Electrician</option><option value="Mobile Repairing   ">Mobile Repairing  </option><option value="CCFA">CCFA</option><option value="Electrical Diploma">Electrical Diploma</option><option value="D.T.P">D.T.P</option><option value="FITTER">FITTER</option><option value="JCB OPERATOR">JCB OPERATOR</option><option value="Diploma in Pump Mechanical">Diploma in Pump Mechanical</option><option value=" P G Diploma ( Computer Application )"> P G Diploma ( Computer Application )</option><option value="ADPL">ADPL</option><option value="AC TECHNICIAN   ">AC TECHNICIAN </option><option value="DIPLOMA IN FIRE AND SEFTY   ">DIPLOMA IN FIRE AND SEFTY </option><option value="Diploma In Electronic">Diploma In Electronic</option><option value="Diploma  in Electrical  Technician">Diploma  in Electrical  Technician</option><option value="Diploma in Auto CAD">Diploma in Auto CAD</option><option value="PIPING &amp;  INSTRUMENT DRAWING">PIPING &amp;  INSTRUMENT DRAWING</option><option value="CCM">CCM</option><option value="Diploma In Electrical">Diploma In Electrical</option><option value="Advance Excel">Advance Excel</option><option value="Advance Diploma In Refrigeration &amp; Air Condition">Advance Diploma In Refrigeration &amp; Air Condition</option><option value="Diploma in Industrial Safety Engineering">Diploma in Industrial Safety Engineering</option><option value="Diploma in Fire and Industrial Safety Management">Diploma in Fire and Industrial Safety Management</option><option value="Mechanic Motor Vehicle">Mechanic Motor Vehicle</option><option value="Diploma in Graphic Designing">Diploma in Graphic Designing</option><option value="DIPLOMA IN H.V.A.C">DIPLOMA IN H.V.A.C</option><option value="DIPLOMA IN INSTRUMENTATION">DIPLOMA IN INSTRUMENTATION</option><option value="P.G DIPLOMA IN FIRE &amp; INDUSTRIAL SAFETY MANAGEMENT">P.G DIPLOMA IN FIRE &amp; INDUSTRIAL SAFETY MANAGEMENT</option><option value="Typing (English)">Typing (English)</option><option value="DIPLOMA IN FITTER">DIPLOMA IN FITTER</option><option value="AutoCad (Architectural &amp; Civil)">AutoCad (Architectural &amp; Civil)</option><option value="Diploma In Desktop Publishing">Diploma In Desktop Publishing</option><option value="Diploma in Computer Hardware &amp; Networking">Diploma in Computer Hardware &amp; Networking</option><option value="Course On Video Editing">Course On Video Editing</option><option value="OMC (Office Management Course)">OMC (Office Management Course)</option><option value="A.D.C.H.N.">A.D.C.H.N.</option><option value="Advance Excel With Accounting">Advance Excel With Accounting</option><option value="Tally Prime With Accounting">Tally Prime With Accounting</option><option value="Diploma IN CCTV">Diploma IN CCTV</option><option value="Diploma In Textile Technology">Diploma In Textile Technology</option><option value="Diploma In Electronics And Telecommunication ">Diploma In Electronics And Telecommunication </option><option value="COURSE OF SEWING AND DESIGN">COURSE OF SEWING AND DESIGN</option><option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option><option value="Diploma In Beautician">Diploma In Beautician</option><option value="Diploma In Carpenter">Diploma In Carpenter</option><option value="Diploma In Electronic Technician ">Diploma In Electronic Technician </option><option value="Diploma In Solar Power Installation">Diploma In Solar Power Installation</option><option value="Diploma in Wastewater Treatment Plant Technician">Diploma in Wastewater Treatment Plant Technician</option><option value="Diploma in Welding">Diploma in Welding</option><option value="Course on M.S. office">Course on M.S. office</option><option value="AUTO ELECTRONIC">AUTO ELECTRONIC</option><option value="Diploma in Mechanical Pipe fitter (Plumber) ">Diploma in Mechanical Pipe fitter (Plumber)   </option><option value="Diploma In Electronics And Telecommunication Engineering">Diploma In Electronics And Telecommunication Engineering</option><option value="GRINDER OPERATOR">GRINDER OPERATOR</option> 
                                    </select>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_course" data-bv-result="NOT_VALIDATED" style="display: none;">Course is requred.</small></div>

                                <div class="col-md-3">
                                    <label for="enq_fee" class="form-label">Fee *</label>
                                    <input type="text" class="form-control" name="enq_fee" id="enq_fee" value="" placeholder="Fee" data-bv-field="enq_fee">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_fee" data-bv-result="NOT_VALIDATED" style="display: none;">Fee is requred.</small></div>
                                
                                <div class="col-md-3">
                                    <label for="enq_father_name" class="form-label">Father's Name *</label>
                                    <input type="text" class="form-control" name="enq_father_name" id="enq_father_name" value="" placeholder="Enter father name" data-bv-field="enq_father_name">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_father_name" data-bv-result="NOT_VALIDATED" style="display: none;">Father name is requred.</small></div>

                                <div class="col-md-3">
                                    <label for="enq_gender" class="form-label">Gender *</label>
                                    <select class="form-control" name="enq_gender" data-bv-field="enq_gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_gender" data-bv-result="NOT_VALIDATED" style="display: none;">Gender name is requred.</small></div>

                                <div class="col-md-3">
                                    <label for="enq_dob" class="form-label">DOB *</label>
                                    <input type="date" class="form-control" name="enq_dob" id="enq_dob" value="" placeholder="Enter student" data-bv-field="enq_dob">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_dob" data-bv-result="NOT_VALIDATED" style="display: none;">DOB is requred.</small></div>

                                <div class="col-md-3">
                                    <label for="enq_gua_mobile_no" class="form-label">Guardian's Mobile Number *</label>
                                    <input type="text" class="form-control" name="enq_gua_mobile_no" id="enq_gua_mobile_no" value="" placeholder="Enter guardian's mobile number" data-bv-field="enq_gua_mobile_no">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_gua_mobile_no" data-bv-result="NOT_VALIDATED" style="display: none;">Guardian`s Mobile Number is requred.</small></div>

                                <div class="col-md-3">
                                    <label for="enq_school_name" class="form-label">School Name *</label>
                                    <input type="text" class="form-control" name="enq_school_name" id="enq_school_name" value="" placeholder="Enter school name" data-bv-field="enq_school_name">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_school_name" data-bv-result="NOT_VALIDATED" style="display: none;">School Name is requred.</small></div>

                                <div class="col-md-3">
                                    <label for="enq_board" class="form-label">Board *</label>
                                    <select class="form-control" name="enq_board" id="enq_board" data-bv-field="enq_board">
                                        <option value="">--- SELECT ---</option>
                                        <option value="UP">UP</option>
                                        <option value="CBSE">CBSE</option>
                                        <option value="ICSE">ICSE</option>
                                    </select>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_board" data-bv-result="NOT_VALIDATED" style="display: none;">Board is requred.</small></div>

                                <div class="col-md-3">
                                    <label for="enq_city" class="form-label">City *</label>
                                    <input type="text" class="form-control" name="enq_city" id="enq_city" value="" placeholder="Enter city" data-bv-field="enq_city">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_city" data-bv-result="NOT_VALIDATED" style="display: none;">City is requred.</small></div>

                                <div class="col-md-3">
                                    <label for="enq_mobile_no" class="form-label">Mobile Number *</label>
                                    <input type="text" class="form-control" name="enq_mobile_no" id="enq_mobile_no" value="" placeholder="Enter guardian's mobile number" data-bv-field="enq_mobile_no">
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_mobile_no" data-bv-result="NOT_VALIDATED" style="display: none;">Mobile no. is requred.</small></div>

                                <div class="col-md-9">
                                    <label for="enq_address" class="form-label">Address *</label>
                                    <textarea class="form-control" id="enq_address" placeholder="Full Address..." name="enq_address" rows="2" spellcheck="false" data-bv-field="enq_address"></textarea>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="enq_address" data-bv-result="NOT_VALIDATED" style="display: none;">Address is requred.</small></div>

                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary" type="submit">Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--end row-->
    </div>

@endsection

