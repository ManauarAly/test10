@extends('admin.app')
@section('main')

<div class="page-content">
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Add </div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
    <div align="">
      <section class="content">

        <div class="box box-default card">
          <form action="" name="myform" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="row">

                <div class="col-md-6 mb-3">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                  <label>Meta Keyword</label>
                  <input type="text" name="meta_keyword" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                  <label>Meta Description</label>
                  <input type="text" name="meta_desc" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                  <label>Post Title</label>
                  <input type="text" name="post_title" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                  <label>Post URL</label>
                  <input type="link" name="post_url" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="">Post Full Description</label>
                </div>
                <div class="clearfix"></div>
                <br><br>

                <div class="col-md-6">
                  <labe>Banner Image, <span class="small text-danger">IMG Size:- Width:- 1920 Hieght:- 1280</span> </labe mb-3l>
                  <img src="imgs/no-image-icon.jpg" class="img-responsive" id="blah2" style="max-height:200px; max-width:100%; width: 100%;" alt="No image">
                  <input type="file" class="form-control" title="xyz" name="file" onchange="readURL2(this);" required="" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png,               image/PNG">
                </div>
                <div class="clearfix"></div>

                <div class="col-md-2">
                  <div class="form-group">
                    <button type="submit" name="entry" style="margin-top: 15px;" class="btn-facebook form-control">Submit </button>




                  </div>
                </div>

              </div>
            </div>
          </form>
        </div>
      </section>

    </div>
  </section>

</div>
@endsection