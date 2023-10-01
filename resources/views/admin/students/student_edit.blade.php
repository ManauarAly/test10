@extends('admin.app')
@section('main')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Student</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="" class="btn btn-primary">List Students</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
        @elseif(session('failed'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('failed') }}
        </div>
        @endif

        @php 
            if(!empty($students)){
                $ad_stu_id = $students['id'];
                $ad_stu_session = $students['session'];
                $ad_reg_no = $students['reg'];
                $stu_name  = $students['name'];
                $stu_course = $students['class'];
                $stu_fee = $students['fee'];
                $stu_father = $students['father'];
                $stu_gender = $students['gender'];
                $stu_dob = $students['dob'];
                $stu_gardian = $students['gardian'];
                $stu_school = $students['last_school'];
                $stu_board = $students['board'];
                $stu_city = $students['city'];
                $stu_mob = $students['mob'];
                $stu_adrs = $students['address'];
                $stu_ad_date = $students['admission_date'];
                $stu_regular = $students['regular'];
                $stu_profile = URL::asset('assets/images/studentImgs/'.$students['img']);
            }else{
                $ad_stu_id = '';
                $ad_stu_session = '';
                $ad_reg_no = '';
                $stu_name = '';
                $stu_course = '';
                $stu_fee = '';
                $stu_father = '';
                $stu_gender = '';
                $stu_dob = '';
                $stu_gardian = '';
                $stu_school = '';
                $stu_board = '';
                $stu_city = '';
                $stu_mob = '';
                $stu_adrs = '';
                $stu_ad_date = '';
                $stu_regular = '';
                $stu_profile = URL::asset('/assets/images/no-image-icon.jpg');
            }
        @endphp
        
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded"> 
                        <form class="row g-3 needs-validation bv-form" method="post" id="enq_form" enctype="multipart/form-data" action="{{route('saveStudentEdit').'/'.$ad_stu_id}}" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                            @csrf
                            <div class="col-md-3">
                                <label for="ad_session" class="form-label">Session:</label>
                                <select class="single-select" name="ad_session" id="ad_session">
                                    <option value="">Select </option>
                                    @for ($i = 2012; $i <= 2024; $i++)
                                        <option value="{{ $i }}" {{ ($ad_stu_session == $i)?'selected':''}}>{{ $i }} </option>
                                    @endfor
                                </select>
                            </div>
                               
                                <div class="col-md-3">
                                    <label for="ad_reg_no" class="form-label">Reg No *</label>
                                    <input type="text" class="form-control" name="ad_reg_no" id="ad_reg_no" value="{{$ad_reg_no}}" data-bv-field="reg_no">
                                </div>

                                <div class="col-md-3">
                                    <label for="ad_date" class="form-label">Admission Date *</label>
                                    <input type="date" class="form-control" name="ad_date" id="ad_date" value="{{$stu_ad_date}}" placeholder="Enter student" data-bv-field="enq_stu_name">
                                </div>

                                <div class="col-md-3">
                                    <label for="ad_regular" class="form-label">Regular /Note Rg *</label>  
                                    <select class="form-control" name="ad_regular" data-bv-field="ad_regular">
                                        <option value="">Select</option>
                                        <option value="regular" {{ ($stu_regular == 'regular')?'selected':''}}>Regular</option>
                                        <option value="not regular" {{ ($stu_regular == 'not regular')?'selected':''}}>Not Regular</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="ad_branch" class="form-label">Select Branch *</label>  
                                    <select class="form-control" name="ad_branch" data-bv-field="ad_branch">
                                        <option value="RTI BHATHAT">RTI BHATHAT</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-3">
                                    <label for="enq_stu_name" class="form-label">Student Name *</label>
                                    <input type="text" class="form-control" name="enq_stu_name" id="enq_stu_name" value="{{$stu_name}}" placeholder="Enter student" data-bv-field="enq_stu_name">
                                </div>

                                <div class="col-md-3">
                                    <label for="enq_course" class="form-label">Course *</label>  
                                    <select class="form-control" name="enq_course" data-bv-field="enq_course">
                                        <option value="">Select</option>
                                        <option value="CCA" {{ ($stu_course == 'CCA')?'selected':''}}>CCA</option>
                                        <option value="DRA" {{ ($stu_course == 'DRA')?'selected':''}}>DRA</option>
                                        <option value="DCA" {{ ($stu_course == 'DCA')?'selected':''}}>DCA</option>
                                        <option value="ADCA" {{ ($stu_course == 'ADCA')?'selected':''}}>ADCA</option>
                                        <option value="Mechanical" {{ ($stu_course == 'Mechanical')?'selected':''}}>Mechanical</option>
                                        <option value="Typing" {{ ($stu_course == 'Typing')?'selected':''}}>Typing</option>
                                        <option value="DCHN" {{ ($stu_course == 'DCHN')?'selected':''}}>DCHN</option>
                                        <option value="Diploma in Electrician" {{ ($stu_course == 'Diploma in Electrician')?'selected':''}}>Diploma in Electrician</option>
                                        <option value="Mobile Repairing" {{ ($stu_course == 'Mobile Repairing')?'selected':''}}>Mobile Repairing  </option>
                                        <option value="CCFA" {{ ($stu_course == 'CCFA')?'selected':''}}>CCFA</option>
                                        <option value="Electrical Diploma" {{ ($stu_course == 'Electrical Diploma')?'selected':''}}>Electrical Diploma</option>
                                        <option value="D.T.P" {{ ($stu_course == 'D.T.P')?'selected':''}}>D.T.P</option>
                                        <option value="FITTER" {{ ($stu_course == 'FITTER')?'selected':''}}>FITTER</option>
                                        <option value="JCB OPERATOR" {{ ($stu_course == 'JCB OPERATOR')?'selected':''}}>JCB OPERATOR</option>
                                        <option value="Diploma in Pump Mechanical" {{ ($stu_course == 'Diploma in Pump Mechanical')?'selected':''}}>Diploma in Pump Mechanical</option>
                                        <option value="P G Diploma ( Computer Application )" {{ ($stu_course == 'P G Diploma ( Computer Application )')?'selected':''}}> P G Diploma ( Computer Application )</option>
                                        <option value="ADPL" {{ ($stu_course == 'ADPL')?'selected':''}}>ADPL</option>
                                        <option value="AC TECHNICIAN" {{ ($stu_course == 'AC TECHNICIAN')?'selected':''}}>AC TECHNICIAN </option>
                                        <option value="DIPLOMA IN FIRE AND SEFTY" {{ ($stu_course == 'DIPLOMA IN FIRE AND SEFTY')?'selected':''}}>DIPLOMA IN FIRE AND SEFTY </option>
                                        <option value="Diploma In Electronic" {{ ($stu_course == 'Diploma In Electronic')?'selected':''}}>Diploma In Electronic</option>
                                        <option value="Diploma  in Electrical  Technician" {{ ($stu_course == 'Diploma  in Electrical  Technician')?'selected':''}}>Diploma  in Electrical  Technician</option>
                                        <option value="Diploma in Auto CAD" {{ ($stu_course == 'Diploma in Auto CAD')?'selected':''}}>Diploma in Auto CAD</option>
                                        <option value="PIPING &amp;  INSTRUMENT DRAWING" {{ ($stu_course == 'PIPING &amp;  INSTRUMENT DRAWING')?'selected':''}}>PIPING &amp;  INSTRUMENT DRAWING</option>
                                        <option value="CCM" {{ ($stu_course == 'CCM')?'selected':''}}>CCM</option>
                                        <option value="Diploma In Electrical" {{ ($stu_course == 'Diploma In Electrical')?'selected':''}}>Diploma In Electrical</option>
                                        <option value="Advance Excel" {{ ($stu_course == 'Advance Excel')?'selected':''}}>Advance Excel</option>
                                        <option value="Advance Diploma In Refrigeration &amp; Air Condition" {{ ($stu_course == 'Advance Diploma In Refrigeration &amp; Air Condition')?'selected':''}}>Advance Diploma In Refrigeration &amp; Air Condition</option>
                                        <option value="Diploma in Industrial Safety Engineering" {{ ($stu_course == 'Diploma in Industrial Safety Engineering')?'selected':''}}>Diploma in Industrial Safety Engineering</option>
                                        <option value="Diploma in Fire and Industrial Safety Management" {{ ($stu_course == 'Diploma in Fire and Industrial Safety Management')?'selected':''}}>Diploma in Fire and Industrial Safety Management</option>
                                        <option value="Mechanic Motor Vehicle" {{ ($stu_course == 'Mechanic Motor Vehicle')?'selected':''}}>Mechanic Motor Vehicle</option>
                                        <option value="Diploma in Graphic Designing" {{ ($stu_course == 'Diploma in Graphic Designing')?'selected':''}}>Diploma in Graphic Designing</option>
                                        <option value="DIPLOMA IN H.V.A.C" {{ ($stu_course == 'DIPLOMA IN H.V.A.C')?'selected':''}}>DIPLOMA IN H.V.A.C</option>
                                        <option value="DIPLOMA IN INSTRUMENTATION" {{ ($stu_course == 'DIPLOMA IN INSTRUMENTATION')?'selected':''}}>DIPLOMA IN INSTRUMENTATION</option>
                                        <option value="P.G DIPLOMA IN FIRE &amp; INDUSTRIAL SAFETY MANAGEMENT" {{ ($stu_course == 'P.G DIPLOMA IN FIRE &amp; INDUSTRIAL SAFETY MANAGEMENT')?'selected':''}}>P.G DIPLOMA IN FIRE &amp; INDUSTRIAL SAFETY MANAGEMENT</option>
                                        <option value="Typing (English)" {{ ($stu_course == 'Typing (English)')?'selected':''}}>Typing (English)</option>
                                        <option value="DIPLOMA IN FITTER" {{ ($stu_course == 'DIPLOMA IN FITTER')?'selected':''}}>DIPLOMA IN FITTER</option>
                                        <option value="AutoCad (Architectural &amp; Civil)" {{ ($stu_course == 'AutoCad (Architectural &amp; Civil)')?'selected':''}}>AutoCad (Architectural &amp; Civil)</option>
                                        <option value="Diploma In Desktop Publishing" {{ ($stu_course == 'Diploma In Desktop Publishing')?'selected':''}}>Diploma In Desktop Publishing</option>
                                        <option value="Diploma in Computer Hardware &amp; Networking" {{ ($stu_course == 'Diploma in Computer Hardware &amp; Networking')?'selected':''}}>Diploma in Computer Hardware &amp; Networking</option>
                                        <option value="Course On Video Editing" {{ ($stu_course == 'Course On Video Editing')?'selected':''}}>Course On Video Editing</option>
                                        <option value="OMC (Office Management Course)" {{ ($stu_course == 'OMC (Office Management Course)')?'selected':''}}>OMC (Office Management Course)</option>
                                        <option value="A.D.C.H.N." {{ ($stu_course == 'A.D.C.H.N.')?'selected':''}}>A.D.C.H.N.</option>
                                        <option value="Advance Excel With Accounting" {{ ($stu_course == 'Advance Excel With Accounting')?'selected':''}}>Advance Excel With Accounting</option>
                                        <option value="Tally Prime With Accounting" {{ ($stu_course == 'Tally Prime With Accounting')?'selected':''}}>Tally Prime With Accounting</option>
                                        <option value="Diploma IN CCTV" {{ ($stu_course == 'Diploma IN CCTV')?'selected':''}}>Diploma IN CCTV</option>
                                        <option value="Diploma In Textile Technology" {{ ($stu_course == 'Diploma In Textile Technology')?'selected':''}}>Diploma In Textile Technology</option>
                                        <option value="Diploma In Electronics And Telecommunication" {{ ($stu_course == 'Diploma In Electronics And Telecommunication')?'selected':''}}>Diploma In Electronics And Telecommunication </option>
                                        <option value="COURSE OF SEWING AND DESIGN" {{ ($stu_course == 'COURSE OF SEWING AND DESIGN')?'selected':''}}>COURSE OF SEWING AND DESIGN</option>
                                        <option value="Diploma in Mechanical Engineering" {{ ($stu_course == 'Diploma in Mechanical Engineering')?'selected':''}}>Diploma in Mechanical Engineering</option>
                                        <option value="Diploma In Beautician" {{ ($stu_course == 'Diploma In Beautician')?'selected':''}}>Diploma In Beautician</option>
                                        <option value="Diploma In Carpenter" {{ ($stu_course == 'Diploma In Carpenter')?'selected':''}}>Diploma In Carpenter</option>
                                        <option value="Diploma In Electronic Technician" {{ ($stu_course == 'Diploma In Electronic Technician')?'selected':''}}>Diploma In Electronic Technician </option>
                                        <option value="Diploma In Solar Power Installation" {{ ($stu_course == 'Diploma In Solar Power Installation')?'selected':''}}>Diploma In Solar Power Installation</option>
                                        <option value="Diploma in Wastewater Treatment Plant Technician" {{ ($stu_course == 'Diploma in Wastewater Treatment Plant Technician')?'selected':''}}>Diploma in Wastewater Treatment Plant Technician</option>
                                        <option value="Diploma in Welding" {{ ($stu_course == 'Diploma in Welding')?'selected':''}}>Diploma in Welding</option>
                                        <option value="Course on M.S. office" {{ ($stu_course == 'Course on M.S. office')?'selected':''}}>Course on M.S. office</option>
                                        <option value="AUTO ELECTRONIC" {{ ($stu_course == 'AUTO ELECTRONIC')?'selected':''}}>AUTO ELECTRONIC</option>
                                        <option value="Diploma in Mechanical Pipe fitter (Plumber)" {{ ($stu_course == 'Diploma in Mechanical Pipe fitter (Plumber)')?'selected':''}}>Diploma in Mechanical Pipe fitter (Plumber)   </option>
                                        <option value="Diploma In Electronics And Telecommunication Engineering" {{ ($stu_course == 'Diploma In Electronics And Telecommunication Engineering')?'selected':''}}>Diploma In Electronics And Telecommunication Engineering</option>
                                        <option value="GRINDER OPERATOR" {{ ($stu_course == 'GRINDER OPERATOR')?'selected':''}}>GRINDER OPERATOR</option> 
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="enq_fee" class="form-label">Fee *</label>
                                    <input type="text" class="form-control" name="enq_fee" id="enq_fee" value="{{$stu_fee}}" placeholder="Fee" data-bv-field="enq_fee">
                                </div>
                                
                                <div class="col-md-3">
                                    <label for="enq_father_name" class="form-label">Father's Name *</label>
                                    <input type="text" class="form-control" name="enq_father_name" id="enq_father_name" value="{{$stu_father}}" placeholder="Enter father name" data-bv-field="enq_father_name">
                                </div>

                                <div class="col-md-3">
                                    <label for="enq_gender" class="form-label">Gender *</label>
                                    <select class="form-control" name="enq_gender" data-bv-field="enq_gender">
                                        <option value="male" {{ ($stu_gender == 'male')?'selected':''}}>Male</option>
                                        <option value="female" {{ ($stu_gender == 'female')?'selected':''}}>Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="enq_dob" class="form-label">DOB *</label>
                                    <input type="date" class="form-control" name="enq_dob" id="enq_dob" value="{{$stu_dob}}" placeholder="Enter student" data-bv-field="enq_dob">
                                </div>

                                <div class="col-md-3">
                                    <label for="enq_gua_mobile_no" class="form-label">Guardian's Mobile Number *</label>
                                    <input type="text" class="form-control" name="enq_gua_mobile_no" id="enq_gua_mobile_no" value="{{$stu_gardian}}" placeholder="Enter guardian's mobile number" data-bv-field="enq_gua_mobile_no">
                                </div>

                                <div class="col-md-3">
                                    <label for="enq_school_name" class="form-label">School Name *</label>
                                    <input type="text" class="form-control" name="enq_school_name" id="enq_school_name" value="{{$stu_school}}" placeholder="Enter school name" data-bv-field="enq_school_name">
                                </div>

                                <div class="col-md-3">
                                    <label for="enq_board" class="form-label">Board *</label>
                                    <select class="form-control" name="enq_board" id="enq_board" data-bv-field="enq_board">
                                        <option value="">--- SELECT ---</option>
                                        <option value="UP" {{ ($stu_board == 'UP')?'selected':''}}>UP</option>
                                        <option value="CBSE" {{ ($stu_board == 'CBSE')?'selected':''}}>CBSE</option>
                                        <option value="ICSE" {{ ($stu_board == 'ICSE')?'selected':''}}>ICSE</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="enq_city" class="form-label">City *</label>
                                    <input type="text" class="form-control" name="enq_city" id="enq_city" value="{{$stu_city}}" placeholder="Enter city" data-bv-field="enq_city">
                                </div>

                                <div class="col-md-3">
                                    <label for="enq_mobile_no" class="form-label">Mobile Number *</label>
                                    <input type="text" class="form-control" name="enq_mobile_no" id="enq_mobile_no" value="{{$stu_mob}}" placeholder="Enter mobile number" data-bv-field="enq_mobile_no">
                                </div>

                                <div class="col-md-8">
                                    <label for="enq_address" class="form-label">Address *</label>
                                    <textarea class="form-control" id="enq_address" placeholder="Full Address..." name="enq_address" rows="2" spellcheck="false" data-bv-field="enq_address">{{$stu_adrs}}</textarea>
                                </div>

                                <div class="col-md-4">
                                    <img src="{{$stu_profile}}" class="img-responsive" id="blah" style="height:135px; width:120px; border-radius:2px; border: double;" alt="No image">
                                    <input type="file" class="form-control" title="xyz" name="file" onchange="readURL(this);" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required="">
                                    <p style="color:red;">Note:- Please upload file less than 150KB. Only !! 
                                    <br>image width should be equal to 100px &amp;&amp; height 100px only
                                    <br> कृपया इमेज का साइज 150 केबी से कम रखें</p>
                                </div>

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


    @section('script')
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result)
                            .width(120)
                            .height(135);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
             }
        </script>
    @endsection
    @endsection