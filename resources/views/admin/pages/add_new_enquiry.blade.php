@extends('admin.app')
@section('main')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add New </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Enquiry Now</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="" class="btn btn-primary">List Enquiry</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded"> 
                            <form class="row g-3 needs-validation" novalidate  method="post" enctype="multipart/form-data" action="">
                                @csrf
                                <div class="col-md-4">
                                    <label for="trv_count" class="form-label">Session:  </label>
									<select class="single-select" name="trv_count" id="trv_count">
										<option value="Select GCC country">Select </option>
                                        @for ($i = 2012; $i <= 2024; $i++)
										    <option value="2016-2017">{{ $i }} </option>
                                        @endfor
									</select>
                                </div>
                               
                                <div class="col-md-4">
                                    <label for="travlesName" class="form-label">Travel Name *</label>
                                    <input type="text" class="form-control" name="trv_name" id="travlesName" value="" required>
                                </div>
                                
                                
                                
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--end row-->
    </div>

@endsection

