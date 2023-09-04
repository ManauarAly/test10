@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Student Image Upload</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">New Student Image upload</li>
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

        <div class="box box-default card">
            <div class="card-body">
                <form action="" name="myform" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-3">
                                <label>Student Name</label>
                                <input type="text" class="form-control" name="stnm">
                            </div>

                            <div class="col-md-3">
                                <label>Select Branch </label>

                                <select class="form-control" name="selctbrnach">

                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="">--</option>
                                    <option value="RTI BHATHAT">RTI BHATHAT</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label>   </label>
                                <img src="imgs/no-image-icon.jpg" class="img-responsive" id="blah" style="max-height:200px; max-width:100%;" alt="No image">
                                <input type="file" class="form-control" title="xyz" name="file" onchange="readURL(this);" required="" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png,               image/PNG">
                            </div>
                            <div class="col-md-4"></div>

                            <div class="clearfix"></div>
                            <div class="col-md-4"></div>
                            <center>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" name="entry" style="margin-top: 15px;" class="btn-facebook form-control">Submit </button>

                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

</div>
@endsection