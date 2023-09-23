@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Employee Management</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
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
    <form action="{{route('storeEmployee')}}" name="myform" method="post" enctype="multipart/form-data">
          @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <br>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Employee ID</label>
                        <input type="text" value="2" name="emp_id" class="form-control" required="">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Joing Date:</label>
                        <input type="date" required="" class="form-control" name="emp_join_date">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Post:</label>
                        <input type="text" class="form-control" name="emp_post">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Name:</label>
                        <input type="text" class="form-control" name="emp_name" placeholder="Full Name" id="nm" required="">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Gender:</label>
                        <select class="form-control" name="emp_gender" id="gnd" required="">
                            <option value="">select gender...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> DOB:</label>
                        <input type="date" class="form-control" name="emp_dob">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Qualification:</label>
                        <input type="text" class="form-control" name="emp_qualification">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Passing Year:</label>
                        <input type="text" class="form-control" name="emp_passing_year">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Experience (in month):</label>
                        <input type="text" class="form-control" name="emp_experience">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Contact No:</label>
                        <input type="text" class="form-control" required="" name="emp_contact_no" id="con">
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Department:</label>
                        <select class="form-control" name="emp_department" required="">
                            <option value=""> SELECT</option>
                            @foreach ($deptsdata as $deptdata)
                            <option value="{{$deptdata->dept_name}}">{{$deptdata->dept_name}}</option>
                            @endforeach 
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Email:</label>
                        <input type="text" class="form-control" name="emp_email">
                    </div>
                </div>


                <div class="clearfix"></div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Address:</label>
                        <textarea class="form-control" name="emp_address"></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Photo:</label>
                        <input type="file" class="form-control" name="emp_photo">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Resume:</label>
                        <input type="file" class="form-control" name="emp_resume">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Document:</label>
                        <input type="file" class="form-control" name="emp_doc" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png,image/PNG">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Salary (per month):</label>
                        <input type="text" class="form-control" name="emp_salary" required="">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-2">
                    <div class="form-group"><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div><br>
                <div class="col-md-10" id="form-content"></div>
                <div class="box-body">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</form>


    @endsection