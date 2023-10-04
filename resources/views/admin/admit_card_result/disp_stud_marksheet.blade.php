@extends('admin.app')
@section('title', 'Marksheet Print')
@section('main')

<style> 
        .mark{
            position: relative !important;
            background-color:unset;
        }
        img{
            position: relative;
        }
        .student-name{
            position: absolute;
            top: 230px;
            left: 200px;
            font-weight: 600;
        }
        .student-roll{
            position: absolute;
            top: 230px;
            left: 625px;
            font-weight: 600;
        }
        .course{
            position: absolute;
            top: 297px;
            left: 150px;
            font-weight: 600;
        }
        .percentage{
            position: absolute;
            top: 297px;
            left: 640px;
            font-weight: 600;
        }
        .theoryMark{
            position: absolute;
            top: 90px;
            left: 850px;
            font-weight: 600;
            font-size: 22px;
        }
        .theoryObt{
            position: absolute;
            top: 90px;
            left: 930px;
            font-weight: 600;
            font-size: 22px;
        }
        .practicalMark{
            position: absolute;
            top: 130px;
            left: 850px;
            font-weight: 600;
            font-size: 22px;
        }
        .practicalObt{
            position: absolute;
            top: 130px;
            left: 930px;
            font-weight: 600;
            font-size: 22px;
        }
        .vibaMark{
            position: absolute;
            top: 170px;
            left: 850px;
            font-weight: 600;
            font-size: 22px;
        }
        .vibaObt{
            position: absolute;
            top: 170px;
            left: 930px;
            font-weight: 600;
            font-size: 22px;
        }
        .attndMark{
            position: absolute;
            top: 210px;
            left: 850px;
            font-weight: 600;
            font-size: 22px;
        }
        .attndObt{
            position: absolute;
            top: 210px;
            left: 930px;
            font-weight: 600;
            font-size: 22px;
        }
        .noteMark{
            position: absolute;
            top: 250px;
            left: 850px;
            font-weight: 600;
            font-size: 22px;
        }
        .noteObt{
            position: absolute;
            top: 250px;
            left: 930px;
            font-weight: 600;
            font-size: 22px;
        }
        .projectMark{
            position: absolute;
            top: 290px;
            left: 850px;
            font-weight: 600;
            font-size: 22px;
        }
        .projectObt{
            position: absolute;
            top: 290px;
            left: 930px;
            font-weight: 600;
            font-size: 22px;
        }
        .totalMark{
            position: absolute;
            top: 332px;
            left: 850px;
            font-weight: 600;
            font-size: 25px;
        }
        .totalObt{
            position: absolute;
            top: 332px;
            left: 930px;
            font-weight: 600;
            font-size: 25px;
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
@foreach($students_data as $student_data)

<div class="mark" style="margin-bottom: 200px; margin-top: 100px;">
        <div class="img"><img src="{{URL::asset('assets/images/markIMG.jpg')}}" alt=""  width="1000px"></div>
        <div class="student-name">{{$student_data['stud_name']}}</div>
        <div class="student-roll">{{$student_data['reg_no']}}</div>
        <div class="course">{{$student_data['reg_no']}}</div>
        <div class="percentage">80</div>
        <!-- ----------- mark and obtain section------------ -->
        <div class="theoryMark">{{$student_data['theory_mark']}}</div>
        <div class="theoryObt">{{$student_data['theory_obt']}}</div>

        <div class="practicalMark">{{$student_data['prac_mark']}}</div>
        <div class="practicalObt">{{$student_data['prac_obt']}}</div>

        <div class="vibaMark">{{$student_data['viba_mark']}}</div>
        <div class="vibaObt">{{$student_data['viba_obt']}}</div>

        <div class="attndMark">{{$student_data['attend_mark']}}</div>
        <div class="attndObt">{{$student_data['attend_obt']}}</div>

        <div class="noteMark">{{$student_data['book_mark']}}</div>
        <div class="noteObt">{{$student_data['book_obt']}}</div>

        <div class="projectMark">{{$student_data['pro_mark']}}</div>
        <div class="projectObt">{{$student_data['pro_obt']}}</div>


        <div class="totalMark">{{$student_data['total_mark']}}</div>
        <div class="totalObt">{{$student_data['total_obt']}}</div>
    </div>
@endforeach

@endsection