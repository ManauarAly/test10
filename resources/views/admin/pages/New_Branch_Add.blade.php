@extends('admin.app')
@section('main')

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

        <div class="box box-default card">
            <form action="" name="myform" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <form action="" name="myform" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <label>Institute Name </label>
                                    <input type="text" name="instnm" class="form-control mb-3">
                                </div>

                                <div class="col-md-3">
                                    <label> Branch Director Name </label>
                                    <input type="text" name="brnm" class="form-control mb-3">
                                </div>
                                <div class="col-md-3">
                                    <label> Mobile No </label>
                                    <input type="number" name="mbl" class="form-control mb-3">
                                </div>

                                <div class="col-md-3">
                                    <label> Email </label>
                                    <input type="email" name="eml" class="form-control mb-3">
                                </div>

                                <div class="col-md-3">
                                    <label> Course1 </label>
                                    <input type="text" name="cour1" class="form-control mb-3">
                                </div>

                                <div class="col-md-3">
                                    <label> Course2 </label>
                                    <input type="text" name="cour2" class="form-control mb-3">
                                </div>
                                <div class="col-md-3">
                                    <label> Course3 </label>
                                    <input type="text" name="cour3" class="form-control mb-3">
                                </div>
                                <div class="col-md-3">
                                    <label> Course4 </label>
                                    <input type="text" name="cour4" class="form-control mb-3">
                                </div>
                                <div class="col-md-3">
                                    <label> Course5 </label>
                                    <input type="text" name="cour5" class="form-control mb-3">
                                </div>
                                <div class="col-md-3">
                                    <label> Course6 </label>
                                    <input type="text" name="cour6" class="form-control mb-3">
                                </div>
                                <div class="col-md-3">
                                    <label> Course7 </label>
                                    <input type="text" name="cour7" class="form-control mb-3">
                                </div>
                                <div class="col-md-3">
                                    <label> Course8 </label>
                                    <input type="text" name="cour8" class="form-control mb-3">
                                </div>

                                <div class="col-md-9">
                                    <label>Branch Full Address </label>
                                    <input type="text" name="add" class="form-control mb-3">
                                </div>

                                <div class="clearfix"></div>
                                <br><br>


                                <div class="col-md-4">
                                    <label> Director Image </label>
                                    <img src="imgs/no-image-icon.jpg" class="img-responsive" id="blah" style="max-height:200px; max-width:100%;" alt="No image">
                                    <input type="file" class="form-control mb-3" title="xyz" name="file" onchange="readURL(this);" required="" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png,               image/PNG">
                                </div>

                                <div class="col-md-4">
                                    <label> Institute Image </label>
                                    <img src="imgs/no-image-icon.jpg" class="img-responsive" id="blah2" style="max-height:200px; max-width:100%;" alt="No image">
                                    <input type="file" class="form-control mb-3" title="xyz" name="file2" onchange="readURL2(this);" required="" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png,               image/PNG">
                                </div>
                                <div class="clearfix"></div>
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
            </form>

        </div>
    </section>

</div>
@endsection