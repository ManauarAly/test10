@extends('admin.app')
@section('main')
@if (session('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success!</strong> {{ session('status') }}
            </div>
        @elseif(session('failed'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success!</strong> {{ session('failed') }}
            </div>
        @endif
        <form action="{{route('branchdispStudmarksheet')}}" target="_blank" method="post">
    @csrf                    
    <div class="col-md-3">
        <input type="submit" name="submit" value="Print" class="btn btn-primary btn-md pull-left">
    </div>
<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Admit Card </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Result</li>
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Print</th>
                        <th scope="col">Roll No</th>
                        <th scope="col">Exam Name</th>
                        <th scope="col">Student</th>
                        <th scope="col">Total Mark</th>
                        <th scope="col">Total Obtain</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($marksheetDatas as $marksheetData)
                <tr id="msheetId-{{$marksheetData->id}}">
                    <td><input type="checkbox" name="admit_card[]" value="{{$marksheetData->reg_no}}"></td>
                    <td>{{$marksheetData->reg_no}}</td>
                    <td>{{$marksheetData->exam_name}}</td>
                    <td>{{$marksheetData->stud_name}}</td>
                    <td>{{$marksheetData->total_mark}}</td>
                    <td>{{$marksheetData->total_obt}}</td>
                </tr>
                @endforeach                   
                </tbody>
            </table>
        </div>
    </div>
</form>

    @endsection