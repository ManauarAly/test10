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
                    <li class="breadcrumb-item active" aria-current="page">Extra Expenese</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="" method="post" style="">
                <div class="box">
                    <div class="box-header">
                        <div style="margin: auto">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><i class="fa fa-server"></i> Date:</label>
                                    <input type="date" name="date" class="form-control" required="">
                                </div>
                            </div>

                            <div class="clearfix"> </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><i class="fa fa-server"></i> Purpose:</label>
                                    <input type="text" name="prpg" class="form-control" required="">
                                </div>
                            </div>

                            <div class="clearfix"> </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><i class="fa fa-server"></i> Amount:</label>
                                    <input type="number" name="amt" class="form-control" required="">
                                </div>
                            </div>

                            <div class="clearfix"> </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label><i class="fa fa-server"></i> By: </label>
                                    <input type="text" name="by" class="form-control" required="">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label> </label>
                                    <button type="submit" name="btn" class="btn-success form-control">Add Expense</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </form>
        </div>
    </div>


    @endsection