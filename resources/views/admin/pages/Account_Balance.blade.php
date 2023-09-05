@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Account/Finance</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Account Balance</li>
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
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3><i class="fa fa-rupee"></i>5353281</h3>

                                    <p>Total Collection</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-inr"></i>
                                </div>
                                <a href="fee-report.php" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3><i class="fa fa-inr"></i>0</h3>

                                    <p>Total Expance</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-inr"></i>
                                </div>
                                <a href="expense-details.php" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3><i class="fa fa-rupee"></i>5353281</h3>

                                    <p>Current Balance</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-inr"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                     
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

                <!-- /.box -->
            </div>
        </div>
    </div>


    @endsection