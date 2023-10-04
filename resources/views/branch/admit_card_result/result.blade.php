@extends('branch.app')
@section('title', 'Result')
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
        <form action="{{route('branchdispStudmarksheet')}}" target="_blank" id="branch_marksheet_print" method="post">
            @csrf                    
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
                    <div class="d-print-none" style="margin: 0 5em;"> 
                        <button type="submit" name="submit" class="btn btn-outline-primary btn-md pull-left">
                            <i class="bx bx-printer"></i>
                            Print
                        </button>
                    </div> 
                    <div class="ms-auto">
                        <div class="btn-group">
                            <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">Print</th>
                                    <th scope="col">Roll No</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Student</th>
                                    <th scope="col">Total Mark</th>
                                    <th scope="col">Total Obtain</th>
                                    <th scope="col">Action</th>
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
                                <td><a href="#" class="btn btn-sm btn-outline-primary"><i class="bx bx-pencil" ></i>Edit Marksheet</a></td>
                            </tr>
                            @endforeach                   
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">Print</th>
                                    <th scope="col">Roll No</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Student</th>
                                    <th scope="col">Total Mark</th>
                                    <th scope="col">Total Obtain</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </form>

    @endsection

    @section('script')
    <script>
        $("#branch_marksheet_print").submit(function(e) {
            if($('input[name="admit_card[]"]:checked').length == 0){
                alert('Please checked the option');
                return false;
            }
        });
    </script>
    @endsection