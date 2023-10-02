@extends('branch.app')
@section('title', 'Admit Card')
@section('main')

<!-- @php 
echo '<pre>';
print_r($data_stu);
echo '</pre>';
@endphp -->

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Admit Card </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Print Admit Card</li>
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
        <div class="table-responsive">
            <form action="{{route('admitCardPrint')}}" method="post">
                @csrf
                <input type="submit" value="Print Admit Card" class="btn btn-primary btn-md pull-left mb-1">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Reg No</th>
                            <th width="10%">Class</th>
                            <th>Name</th>
                            <th>Father</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Mobile No</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_stu as $stuData)
                            <tr>
                                <td> <input type="checkbox" name="_reg_no[]" value="{{$stuData['stu_reg_no']}}"> </td>
                                <td>{{$stuData['stu_reg_no']}}</td>
                                <td>{{$stuData['stu_admin_with_student'][0]['class']}}</td>
                                <td>{{$stuData['stu_admin_with_student'][0]['name']}}</td>
                                <td>{{$stuData['stu_admin_with_student'][0]['father']}}</td>
                                <td>{{$stuData['stu_admin_with_student'][0]['gender']}}</td>
                                <td>{{$stuData['stu_admin_with_student'][0]['dob']}}</td>
                                <td>{{$stuData['stu_admin_with_student'][0]['mob']}}</td>
                                <td> <a href="{{url('branch/create-marksheet').'/'.$stuData['stu_admin_with_student'][0]['reg']}}" class=""><i class="bx bx-plus" style="font-size: 20px;font-weight: bold;"></i></a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Select</th>
                            <th>Reg No</th>
                            <th width="10%">Class</th>
                            <th>Name</th>
                            <th>Father</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Mobile No</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
        </div>
    </div>
    @endsection