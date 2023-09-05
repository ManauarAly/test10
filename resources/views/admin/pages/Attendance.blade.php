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
                    <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
        <form action="" name="myform" method="post" enctype="multipart/form-data">
          <div class="row"><br>
            <div class="col-md-2">
              <div class="form-group" style="width:100%;">
                <label>Select Date</label><br>
                <input type="Date" onchange="showUser(this.value)" id="example1" value="" required="" name="dddtr" class="form-control" placeholder="Date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" style="width:100%;">
                <label>Reason (if college close)</label><br>
                <input type="text" name="cclose" class="form-control" placeholder="Reason">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group" style="width:100%;">
                <label><br></label><br>
                <input type="submit" value="Submit" name="atndc" class="form-control btn-success">
              </div>
            </div>
            <div class="clearfix"></div>
            <div id="txtHint" class="col-md-12">
            	
            </div>
        
        </div></form>
        </div>
    </div>


    @endsection