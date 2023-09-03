@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add Course</div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="box box-default">
                <form action="" name="myform" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-4">
                                <label> Select Cousre </label>
                                <select type="text" name="selsct_co" class="form-control" required="">
                                    <option>Select Course</option>
                                    <option value="Software Course">Software Course</option>
                                    <option value="Hardware Course">Hardware Course</option>
                                    <option value="Technical Course">Technical Course</option>
                                    <option value="Preparation Course">Preparation Course</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label> Course Name </label>
                                <input type="text" name="tea" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label> Courses Details </label>
                                <textarea type="text" name="pos" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="col-md-4">
                                <label>   </label>
                                <img src="imgs/no-image-icon.jpg" class="img-responsive" id="blah" style="max-height:200px; max-width:100%;" alt="No image">
                                <input type="file" class="form-control" title="xyz" name="file" onchange="readURL(this);" required="" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png,               image/PNG">
                            </div>
                            <div class="col-md-4"></div>

                            <div class="clearfix"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <button type="submit" name="entry" style="margin-top: 15px;" class="btn-facebook form-control">Submit </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection