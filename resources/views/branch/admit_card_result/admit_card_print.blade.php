@extends('branch.app')
@section('title', 'Admit Card Print')
@section('main')

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    td, th {
        border: 1px solid #eeeeee;
        text-align: left;
        padding: 5px 5px;
    }
    .top-con{
        /* width:84%; */
        background:white;
        /* margin-left:auto;
        margin-right:auto; */
        padding:20px;
        margin-bottom: 10px;
    }
    .containerr{
        width:100%;
        background:white;
        margin-left:auto;
        margin-right:auto;
        padding: 10px;
        border: 2px dashed #e3e3e3;
    }
    .flex-container {
        display: flex;
    }
    .flex-container > div {
        width:100%;
    }
    .flex-container-logo{
        margin: 10px;
        padding: 10px;
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

  .main-wrapper{
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin: 15px 10px;
    gap: 10px;
  }
  .btn-primary-fill {
    padding: 10px 15px;
    color: #fff;
    text-transform: capitalize;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    background: #354757;
}
</style>

<main class="main-wrapper position-relative">
<div>
@foreach($_stu_data as $stu_data)
  
    <div class="top-con">
        <div class="containerr">
            <table>
                <tr>
                    <th style="border:none" colspan="1"><img src="https://manauaraly.in/public/web/assets/images/lite-logo.png" width="80px"></th>
                    <th colspan="4" style="border:none;text-align:center"><h5 style="color:#9e0b0f;">RAMA TECHNICAL INSTITUTE<br>(admit card for written examination 2022-2023)</h5></th>
                    <th colspan="4" style="border:none"><br></th>
                </tr>
            
                <tr>
                    <td style="border:none"><h5>Examination Date: {{date('d-M-y', strtotime($stu_data['exam_date']))}} </h5></td>
                    <td  style="border:none;text-align:center" ><h3><br></h3></td> <td  style="border:none;text-align:center" ><h3><br></h3>
                    </td> <td  style="border:none;text-align:center" ><h3><br></h3></td>
                    <th style="border:none"><h5>Examination Time: {{$stu_data['exam_time']}}</h5></th>
                    </td> <td  style="border:none;text-align:center" ><h3><br></h3></td>
                    </td> <td  style="border:none;text-align:center" ><h3><br></h3></td> 
                </tr>
            
                <tr>
                    <th>Reg No</th>
                    <td colspan="3">{{$stu_data['stu_admin_with_student'][0]['reg']}}</td>
                    <th colspan="3" rowspan="6" style="text-align:center;">
                        <img src="{{URL::asset('assets/images/studentImgs/'.$stu_data['stu_admin_with_student'][0]['img'])}}" width="200px">
                        <h6>(Signature Of Candidate)</h6>
                    </th>
                </tr>
                <tr>  
                    <th>Candidate Name</th>
                        <td colspan="3">{{$stu_data['stu_admin_with_student'][0]['name']}}</td>
                    </td>    
                </tr>

                <tr>  
                    <th>Father's Name</th>
                    <td colspan="3">{{$stu_data['stu_admin_with_student'][0]['father']}}</td>          
                </tr>

                <tr>  
                    <th>Date Of Birth</th>
                    <td colspan="3">{{date('d-m-y', strtotime($stu_data['stu_admin_with_student'][0]['dob']))}}</td>   
                </tr>

                <tr> 
                    <th>Reporting Time</th>
                    <td colspan="3">10:00</td>    
                </tr>

                <tr>  
                    <th>Examination Center</th>
                    <td colspan="3">{{$stu_data['stu_admin_with_student'][0]['branch_id']}}</td>
                </tr>

                <tr>
                    <td style="border:none"><h5> {{$stu_data['stu_admin_with_student'][0]['class']}} Subject</h5></td>
                </tr>

                <tr>
                    <td colspan="100%"  > 
                        <!-- <div style="height:300px;text-align:center;" ><h3>Important Instruction</h3> -->
                    </td>
                </tr>
            </table>

            <hr style="border: 2px dashed #939393; border-style: none none dashed;">
            <div class="justify-content-between d-flex">
                <p><b>Examiner Signature</b>  ......................................</p>
                <p><b>Director Signature</b>  ......................................</p>
            </div>
        </div>
    </div>
    
@endforeach
</div>
<!-- invoice Bottom  -->
<div class="text-center modern-bill-button">
    <div class="d-print-none d-flex flex-column justify-content-center flex-wrap gap-10 mt-5"> 
        <a href="javascript:window.print()" class="btn-primary-fill">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" style="width:40px;"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><circle cx="392" cy="184" r="24" fill="currentColor"></circle></svg>
        </a> 
    </div>
</div>
</div>

@endsection