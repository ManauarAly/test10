@extends('admin.app')
@section('title', 'Admit Card')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Create Admit Card </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create Admit Card</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="#" class="btn btn-primary">Admit Card Details</a>
            </div>
        </div>
    </div>

    <div class="row">   
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded"> 
                    <form class="row g-3 needs-validation bv-form" method="post" id="enq_form" enctype="multipart/form-data" action="{{route('admitCardPrint')}}" novalidate="novalidate">
                        @csrf
                            <div class="col-md-3">
                                <label for="adc_exam_name" class="form-label">Exam Name *</label>
                                <input type="text" class="form-control" name="adc_exam_name" id="adc_exam_name" value="" placeholder="Enter exam name">
                            </div>

                            <div class="col-md-3">
                                <label for="adc_exam_date" class="form-label">Exam Date *</label>
                                <input type="date" class="form-control" name="adc_exam_date" id="adc_exam_date" value="" placeholder="Enter exam date">
                            </div>

                            <div class="col-md-3">
                                <label for="adc_exam_time" class="form-label">Exam Time *</label>
                                <input type="text" class="form-control" name="adc_exam_time" id="adc_exam_time" value="" placeholder="Enter exam time">
                            </div>

                            <div class="col-md-3">
                                <label for="adc_exam_day" class="form-label">Exam Day *</label>
                                <input type="text" class="form-control" name="adc_exam_day" id="adc_exam_day" value="" placeholder="Enter exam day">
                            </div>

                            <div class="col-md-12 text-end">
                                <button class="btn btn-primary btn-block" style="width:100%" type="submit">Submit </button>
                            </div>
                            <hr style="border: 2px dashed #939393; border-style: none none dashed;">
                        
                            @foreach($data_stu as $_data_stu)
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="_reg_no" class="form-label">Reg No *</label>
                                    <input type="text" class="form-control" name="_reg_no[]" id="_reg_no" value="{{$_data_stu['reg']}}" placeholder="Reg No" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="_stu_name" class="form-label">Student Name *</label>
                                    <input type="text" class="form-control" name="_stu_name" id="_stu_name" value="{{$_data_stu['name']}}" placeholder="Student Name" readonly>
                                </div>
                                </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection