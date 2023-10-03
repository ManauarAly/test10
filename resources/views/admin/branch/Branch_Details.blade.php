@extends('admin.app')
@section('title', 'Branch Details')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Branch Website Add</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Branch Details</li>
                </ol>
            </nav>
        </div>
    </div>

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

    <div class="card">
        <div class="card-body">

            <table class="table table-striped" id="example">
                <thead>
                <tr>
                    <th scope="col">Branch Head</th>
                    <th scope="col">Branch Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th> 
                    <th scope="col">Action</th> 
                </tr>
                </thead>
                <tbody>
                @foreach ($branchsdata as $branchdata)
                    <tr id="branchId-{{$branchdata->id}}">
                        <td>{{$branchdata->branch_head}}</td>
                        <td>{{$branchdata->branch_address}}</td>
                        <td>{{$branchdata->email}}</td>
                        <td>{{$branchdata->mobile}}</td>                    
                        <td><a href="{{url('admin/Edit_Branch_Details/' . $branchdata->id )}}" class="editBranch" title="Edit Branch Data">edit</a></td>                        
                    </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>


    @endsection