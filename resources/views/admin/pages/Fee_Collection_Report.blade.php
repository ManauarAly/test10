@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Report</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Fee Collection Report</li>
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
            <div class="box">

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="box">
                        <div class="box-header">
                            <div class="col-md-4 demo">
                                <input type="Date" id="config-demo" class="form-control">
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="loader text-center" style="display:none"><img src="imgs/processing.gif"></div>
                                <div class="response"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.box -->
            </div>
        </div>
    </div>


    @endsection