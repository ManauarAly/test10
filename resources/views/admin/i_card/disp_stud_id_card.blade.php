@extends('admin.app')
@section('title', 'I-Card')
@section('main')
<style>
        *{
            margin:00px;
            padding: 00px;
            
        }

        .container
        {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            box-sizing: border-box;
            flex-direction: row;

            

        }


        @media print {
        * {
            -webkit-print-color-adjust: exact !important; /*Chrome, Safari */
            color-adjust: exact !important;  /*Firefox*/
        }
        .page-breadcrumb{
            display:none !important;
        }

        }

        .font
        {
            
            height: 296px;
            width: 198px;
            position: relative;
            /* border-radius:5px; */
            background-image:url('./idCard.jpg');
            visibility: visible;
            background-size: 198px 314px;
            background-repeat: no-repeat;
            border: 2px solid black;

        }
        
        .companyname{
            color: red;
            padding: 5px;
            font-size:22px;
            font-weight: 400;

        }

        .tab {
            padding-right:30px;
        }

        .top img
        {
            height: 100%;
            width:100%;
            background-color:#e6ebe0;
            top: 60px;
            left: 50px;
            object-fit: content;
            border:1px solid black;            
        }
        .ename{
            position: absolute;
            top: 92px;
            left: 5px;
            font-size:12px;
        }
        
        .edetails {
            position: absolute;
            top: 130px;
            text-transform: capitalize;
            font-size: 13px;
            text-emphasis: spacing;
            margin-left: 6px;
        }
        .signature{
            position: absolute;
            top: 73%;
            left: 85px;
            height: 80px;
            width: 160px;
        }
        .signature img{

            height: 40px;
            width: 100px;
            margin: 15px 00px 00px 5px;
            
          
        }


        .barcode img
        {
            height: 65px;
            width: 65px;
            text-align: center;
            margin:5px;
            
        }
        .barcode
        {
            text-align: center;
            position: absolute;
            top:55.5%;
            left: 130px;
        }
        

        .qr
        {
            position: absolute;
            top: 89%;
            left: 4%;
            height: 30px;
            width:250px;
            /* margin: 30px; */
            /* background-color:white;
            padding: 5px;
             */
             font-size: 11px;
             color:red;
             font-weight: 1000;
            
        }
         .qr p{
             position: absolute;
             font-size: 14px;
             left: 10px;
         }
       
        .edetails .Address
        {
           
            width: 60%;
            text-align: justify;
        }
        .page-wrapper p{
            margin-bottom:unset !important;
        }
        @media print {
            .d-print-inline {
            display: inline !important;
            }
            .d-print-inline-block {
            display: inline-block !important;
            }
            .d-print-block {
            display: block !important;
            }
            .d-print-grid {
            display: -ms-grid !important;
            display: grid !important;
            }
            .d-print-table {
            display: table !important;
            }
            .d-print-table-row {
            display: table-row !important;
            }
            .d-print-table-cell {
            display: table-cell !important;
            }
            .d-print-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            }
            .d-print-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
            }
            .d-print-none {
            display: none !important;
            }
            .sidebar-wrapper, .topbar, .page-footer{
            display: none !important;
            }
            .page-wrapper{
            margin-left:0px;
            }
            .modern-invoice3{
            margin-top:-55px !important;
            }
            .print-row{
            justify-content: space-between !important;
            display: flex !important;
            }
            .print-two2{
            flex-wrap: unset !important;
            }
            .print-two2 > *{
            max-width: 100% !important;
            width: unset !important;
            }
        }
     
</style>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Student</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Student List Print</li>
                    </ol>
                </nav>
            </div>
            <div class="d-print-none" style="margin: 0 5em;"> 
                <a href="javascript:window.print()"class="btn-primary-fill btn btn-outline-primary" style="font-size: 18px;">
                <i class="bx bx-printer"></i>
                Print
                </a>
            </div>           
            <div class="ms-auto">           
                <div class="btn-group">
                    <a href="{{route('studentIdcard')}}" class="btn btn-primary">ID Card List</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

@foreach($students_data as $student_data)
<div class="" style="margin-left: 40px; margin-top: 25px; float: left;">
        <div class="padding">
        <div class="font">
           <!--  <div class="companyname"> RAMA TECHNICAL<br>&ensp;&ensp;&ensp; <span class="tab">INSTITUTE</span> </div> -->

            <div class="top">
                <img src="{{URL::asset('assets/images/studentImgs/idCard.jpg')}}" alt="">
            </div>
            <div class="">
                <div class="ename">
                <p class="title"><b>Name:</b>{{$student_data['stuicardwithadmission'][0]['name']}}</p>
                <p><b>Course:</b>{{$student_data['stuicardwithadmission'][0]['class']}}</p>
                </div>
                <div class="edetails">
                    <P><b>Mobile No :</b>{{$student_data['stuicardwithadmission'][0]['mob']}}</P> 
                    <P><b>Gender :</b>{{$student_data['stuicardwithadmission'][0]['gender']}}</P> 
                    <p><b>DOB :</b>{{$student_data['stuicardwithadmission'][0]['dob']}}</p>
                    <p><b>Roll No :</b>{{$student_data['stuicardwithadmission'][0]['reg']}}</p> 
                    <p><b>Address : {{$student_data['stuicardwithadmission'][0]['address']}}</b></p>
                    
                </div>

                <div class="signature">
                    <img src="{{URL::asset('assets/images/studentImgs/sign-rama.png')}}" alt="signature rama technical sir">
                </div>          
            </div>
        </div>
    </div>
       
    </div>
    @endforeach
</div>
@endsection