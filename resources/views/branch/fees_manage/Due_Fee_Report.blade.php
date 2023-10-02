@extends('branch.app')
@section('title', 'Due Fee Report')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Due Fee Report</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Student Fee Due Report</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
            </div>
        </div>
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
    </div>

    @endsection