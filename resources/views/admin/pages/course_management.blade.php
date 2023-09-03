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
                        <li class="breadcrumb-item active" aria-current="page">Course</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">List Course</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
        @elseif(session('failed'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('failed') }}
        </div>
        @endif
        <form class="bv-form" method="post" id="course_form" enctype="multipart/form-data" action="{{route('storeCourseManage')}}" novalidate="novalidate">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded"> 
                            <div class="row">
                                @csrf
                                <div class="col-md-3">
                                    <label for="course_name" class="form-label">Course Name *</label>
                                    <input type="text" class="form-control" name="course_name" id="course_name" value="" placeholder="Enter Course Name">
                                </div>
                                
                                <div class="col-md-3">
                                    <label for="course_fee" class="form-label">Course Fee *</label>
                                    <input type="text" class="form-control" name="course_fee" id="course_fee" value="" placeholder="Enter Fee">
                                </div>
                                
                                <div class="col-md-3">
                                    <label for="course_duration" class="form-label">Duration *</label>
                                    <input type="text" class="form-control" name="course_duration" id="course_duration" value="" placeholder="Enter Duration">
                                </div>

                                <div class="col-md-3">
                                    <label for="course_exam" class="form-label">Exam *</label>
                                    <input type="text" class="form-control" name="course_exam" id="course_exam" value="" placeholder="Enter Exam">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--end row-->

                <div id="repeater">
                    <!-- Repeater Heading -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Add Subject</h5>
                                <button type="button" class="btn btn-primary repeater-add-btn px-4">Add</button>
                            </div>
                        </div>
                    </div>
                    <!-- Repeater Items -->
                            
                    <div class="items" data-index="0">
                        <div class="card">
                            <div class="card-body">
                                <!-- Repeater Content -->
                                <div class="item-content row">
                                    <div class="mb-3 col-md-8">
                                        <label for="subject_0_name" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject_0_name" placeholder="Enter subject" data-name="name" name="suject[]" value="">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="email" class="form-label">Max Mark</label>
                                        <input type="text" class="form-control" id="max_mark" placeholder="Max Mark" data-skip-name="true" data-name="max_mark" name="max_mark[]" value="">
                                    </div>
                                </div>
                                <!-- Repeater Remove Btn -->
                                <div class="repeater-remove-btn">
                                    <button class="btn btn-danger remove-btn px-4" disabled="disabled" onclick="$(this).parents('.items').remove()">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    <div>
                </div>
        </div>
    
        </div>

        <div class="card">
            <div class="card-body text-end">
                <button class="btn btn-primary" type="submit">Submit </button>
            </div>
        </div>
    </form>

@endsection

@section('script')
    <script>
        /* Create Repeater */
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>
@endsection

