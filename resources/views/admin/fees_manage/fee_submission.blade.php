@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Fee Management</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Fee Submission</li>
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
            <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                <thead>
                    <tr>
                        <th scope="col">Class</th>
                        <th scope="col">Reg No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Father</th>
                        <th scope="col">Total Fee</th>
                        <th scope="col">Total Due</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stuDatas as $stuData)
                    <tr>
                        <td>{{$stuData->class}}</td>
                        <td>{{$stuData->reg}}</td>
                        <td>{{$stuData->name}}</td>
                        <td>{{$stuData->father}}</td>
                        <td>3000</td>
                        <td><i class="fa fa-rupee"></i>3000</td>
                        <td>
                            <div class="ms-auto">
                                <div class="btn-group">
                                    <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">Quick Payment</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    @endsection