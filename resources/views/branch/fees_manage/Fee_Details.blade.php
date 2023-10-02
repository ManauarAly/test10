@extends('branch.app')
@section('title', 'Fee Management')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Fee Management</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Fee Details</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
            </div>
        </div>
    </div>

    <div class="box-header">
        <form action="admitCardPrint.php" target="_blank" method="post">

            <div class="row mb-3">
                <div class="col-md-4 d-flex align-items-center">
                    <select class="form-control" name="cls">
                        <option value="All">All Student</option>
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
                    <div class="ms-auto">
                        <div class="btn-group mx-2">
                            <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">Search</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </div>

    <div class="card">
        <div class="card-body">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Class</th>
                        <th scope="col">Reg No</th>
                        <th scope="col">Admission Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Father</th>
                        <th scope="col">Total Fee</th>
                        <th scope="col">Total Due</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php 
                    $total_fee = 0;
                    $fee_due = 0;
                @endphp
                
                @foreach($stuDatas as $stuData)

                    @php
                       if(!empty($stuData['stu_fees_manage_with_student'])){
                            foreach($stuData['stu_fees_manage_with_student'] as $val){
                                $total_fee  =   $total_fee+$val['receive_fee'];
                            }
                       }   
                       
                       $fee_due = (int)$stuData['fee'] - (int)$total_fee;
                    @endphp
            
                    <tr>
                        <td>{{$stuData['class']}}</td>
                        <td>{{$stuData['reg']}}</td>
                        <td>{{$stuData['admission_date']}}</td>
                        <td>{{$stuData['name']}}</td>
                        <td>{{$stuData['father']}}</td>
                        <td>{{$total_fee}}</td>
                        <td>{{$fee_due}}</td>
                        <td>
                            <div class="ms-auto d-flex">
                                <div class="btn-group">
                                    <a href="/branch/view-payment/{{$stuData['reg']}}" class="btn btn-success">View</a>
                                </div>
                                <div class="btn-group">
                                    <a href="fee-payment/{{$stuData['reg']}}" class="btn btn-primary">Quick Payment</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <!-- @php 
    echo '<pre>';
    print_r($stuDatas);
    @endphp -->

    @endsection