@extends('admin.app')
@section('title', 'New Branch Add')
@section('main')

<style>
    small.help-block {
        color: red;
    }
</style>

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Branch Website Add</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">New Branch Add</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
            </div>
        </div>
    </div>
    <section class="content-header">
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
        <div class="box box-default card">
            <form action="{{route('storeNewBranchAdd')}}" name="myform" method="post" id="addNewBranch" enctype="multipart/form-data">
            @csrf
                <div class="card-body">
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-3  mb-3">
                                    <label>Username *</label>
                                    <input type="text" name="b_userid" class="form-control" placeholder="Enter username">
                                </div>

                                <div class="col-md-3  mb-3">
                                    <label> Password* </label>
                                    <input type="text" name="b_pass" class="form-control" placeholder="Enter password">
                                </div>
                                <div class="col-md-3  mb-3">
                                    <label> Mobile No </label>
                                    <input type="number" name="b_mob" class="form-control" placeholder="Enter mobile no">
                                </div>

                                <div class="col-md-3  mb-3">
                                    <label> Email </label>
                                    <input type="email" name="b_email" class="form-control" placeholder="Enter Email" >
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label> Branch Address </label>
                                    <input type="text" name="b_add" class="form-control" placeholder="Enter branch address">
                                </div>

                                <div class="col-md-3  mb-3">
                                    <label> Branch Name </label>
                                    <input type="text" name="b_head" class="form-control" placeholder="Enter branch name">
                                </div>                               

                                <div class="clearfix"></div>
                                <br><br>                        
                                <div class="clearfix"></div>
                                    <div class="col-md-2 text-center">
                                        <div class="form-group">
                                            <button type="submit" name="entry" style="margin-top: 15px;" class="btn-facebook form-control">Submit </button>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </form>
                </div>
            </section>
        </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#addNewBranch').bootstrapValidator({
                fields: {
                    b_userid: {
                        validators: {
                            notEmpty: {
                                message: 'Username is requred.'
                            }
                        }
                    },
                    b_pass: {
                        validators: {
                            notEmpty: {
                                message: 'Password is requred.'
                            }
                        }
                    },
                    b_mob: {
                        validators: {
                            notEmpty: {
                                message: 'Mobile no is requred.'
                            }
                        }
                    },
                    b_email: {
                        validators: {
                            notEmpty: {
                                message: 'email id is requred.'
                            }
                        }
                    },
                    b_add: {
                        validators: {
                            notEmpty: {
                                message: 'Branch address is requred.'
                            }
                        }
                    },
                    b_head: {
                        validators: {
                            notEmpty: {
                                message: 'Branch head is requred.'
                            }
                        }
                    }
                }
            })
        });
    </script>
@endsection
