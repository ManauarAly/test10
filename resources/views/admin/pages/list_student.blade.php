@extends('admin.app')
@section('main')

<div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Agent</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List All</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="" class="btn btn-primary">Add New Agent</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Enq No</th>
                                <!-- <th>Name</th>
                                <th>Class</th>
                                <th>Fee</th>
                                <th>Father</th>
                                <th>City</th>
                                <th>School & Board</th>
                                <th>Mobile</th>
                                <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>testing</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Enq No</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Fee</th>
                                <th>Father</th>
                                <th>City</th>
                                <th>School & Board</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>

@endsection