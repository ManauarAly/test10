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

    <div class="card">
        <div class="card-body">
            <div class="row">
                <br>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Employee ID</label>
                        <input type="text" value="2" name="ffi" class="form-control" required="">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Joing Date:</label>
                        <input type="date" required="" class="form-control" name="jdate">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Post:</label>
                        <input type="text" class="form-control" name="pst">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Name:</label>
                        <input type="text" class="form-control" name="ename" placeholder="Full Name" id="nm" required="">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Gender:</label>
                        <select class="form-control" name="gndr" id="gnd" required="">
                            <option value="">select gender...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> DOB:</label>
                        <input type="date" class="form-control" name="dob">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Qualification:</label>
                        <input type="text" class="form-control" name="qual">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Qualifying Year:</label>
                        <input type="text" class="form-control" name="quayr">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Experience (in month):</label>
                        <input type="text" class="form-control" name="exp">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Contact No:</label>
                        <input type="text" class="form-control" required="" name="con" id="con">
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Department:</label>
                        <select class="form-control" name="depart" required="">

                            <option value=""> SELECT</option>

                            <option value="SOFTWARE TEACHER">SOFTWARE TEACHER</option>
                            <option value="SOFTWARE TEACHER &amp;  HARDWARE TEACHER">SOFTWARE TEACHER &amp; HARDWARE TEACHER</option>
                            <option value="HARDWARE TEACHER">HARDWARE TEACHER</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Email:</label>
                        <input type="text" class="form-control" name="mail">
                    </div>
                </div>


                <div class="clearfix"></div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Address:</label>
                        <textarea class="form-control" name="adrs"></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Photo:</label>
                        <input type="file" class="form-control" name="pht">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Resume:</label>
                        <input type="file" class="form-control" name="rsm">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Document:</label>
                        <input type="file" class="form-control" name="docm">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label><i class="fa fa-server"></i> Salary (per month):</label>
                        <input type="text" class="form-control" required="">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-2">
                    <div class="form-group"><br>
                        <button class="btn btn-primary" onclick="imgld()">Submit</button>
                    </div>
                </div><br>
                <div class="col-md-10" id="form-content"></div>
                <div class="box-body">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    @endsection