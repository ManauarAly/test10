@extends('branch.app')
@section('title', 'Create Marksheet')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Create Marksheet </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create Marksheet</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="#" class="btn btn-primary">Create Marksheet</a>
            </div>
        </div>
    </div>
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
    <div class="row">   
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded"> 
                        <form class="row g-3 needs-validation bv-form" method="post" id="enq_form" enctype="multipart/form-data" action="{{route('branchstoreMarksheet')}}" novalidate="novalidate">
                            @csrf
                            <div class="col-md-6">
                                <label for="_reg_no" class="form-label">Reg No *</label>
                                <input type="text" class="form-control" name="reg_no" id="_reg_no" value="{{$data['student'][0]['reg']}}" placeholder="Reg No" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="_stu_name" class="form-label">Student Name *</label>
                                <input type="text" class="form-control" name="stud_name" id="_stu_name" value="{{$data['student'][0]['name']}}" placeholder="Student Name" readonly>
                            </div>

                            <div class="col-md-12">
                                <label for="_stu_name" class="form-label">Exam Name *</label>
                                <input type="text" class="form-control" name="exam_name" id="_stu_name" value="Annual Eaxam" placeholder="Exam Name" readonly>
                            </div>
                            
                            <hr style="border: 2px dashed #939393; border-style: none none dashed;">

                            <div class="col-md-6">
                                <label for="theory_mark" class="form-label">Theory Mark *</label>
                                <input type="text" class="form-control _mark" name="theory_mark" id="theory_mark" value="35" placeholder="Enter theory mark">
                            </div>

                            <div class="col-md-6">
                                <label for="theory_obt" class="form-label">Theory Obt *</label>
                                <input type="text" class="form-control _obt" name="theory_obt" id="theory_obt" value="" placeholder="Enter theory obt">
                            </div>

                            <div class="col-md-6">
                                <label for="practical_mark" class="form-label">Practical Mark *</label>
                                <input type="text" class="form-control _mark" name="practical_mark" id="practical_mark" value="15" placeholder="Enter practical mark">
                            </div>

                            <div class="col-md-6">
                                <label for="practical_obt" class="form-label">Practical Obt *</label>
                                <input type="text" class="form-control _obt" name="practical_obt" id="practical_obt" value="" placeholder="Enter practical obt">
                            </div>

                            <div class="col-md-6">
                                <label for="viba_mark" class="form-label">Viba Mark *</label>
                                <input type="text" class="form-control _mark" name="viba_mark" id="viba_mark" value="15" placeholder="Enter viba mark">
                            </div>

                            <div class="col-md-6">
                                <label for="viba_obt" class="form-label">Viba Obt *</label>
                                <input type="text" class="form-control _obt" name="viba_obt" id="viba_obt" value="" placeholder="Enter viba obt">
                            </div>

                            <div class="col-md-6">
                                <label for="attnd_mark" class="form-label">Attnd Mark *</label>
                                <input type="text" class="form-control _mark" name="attnd_mark" id="attnd_mark" value="10" placeholder="Enter attnd mark">
                            </div>

                            <div class="col-md-6">
                                <label for="attnd_obt" class="form-label">Attnd Obt *</label>
                                <input type="text" class="form-control _obt" name="attnd_obt" id="attnd_obt" value="" placeholder="Enter attnd obt">
                            </div>

                            <div class="col-md-6">
                                <label for="notebook_mark" class="form-label">Notebook Mark *</label>
                                <input type="text" class="form-control _mark" name="notebook_mark" id="notebook_mark" value="10" placeholder="Enter notebook mark">
                            </div>

                            <div class="col-md-6">
                                <label for="notebook_obt" class="form-label">Notebook Obt *</label>
                                <input type="text" class="form-control _obt" name="notebook_obt" id="notebook_obt" value="" placeholder="Enter notebook obt">
                            </div>

                            <div class="col-md-6">
                                <label for="project_mark" class="form-label">Project Mark *</label>
                                <input type="text" class="form-control _mark" name="project_mark" id="project_mark" value="15" placeholder="Enter project mark">
                            </div>

                            <div class="col-md-6">
                                <label for="project_obt" class="form-label">Project Obt *</label>
                                <input type="text" class="form-control _obt" name="project_obt" id="project_obt" value="" placeholder="Enter exam name">
                            </div>

                            <div class="col-md-6">
                                <label for="total_mark" class="form-label">Total Mark *</label>
                                <input type="text" class="form-control" name="total_mark" id="total_mark" value="" placeholder="Enter total mark">
                            </div>

                            <div class="col-md-6">
                                <label for="total_obt" class="form-label">Total Obt *</label>
                                <input type="text" class="form-control" name="total_obt" id="total_obt" value="" placeholder="Enter exam name">
                            </div>

                            <div class="col-md-12 text-end">
                                <button class="btn btn-primary btn-block" style="width:100%" type="submit">Submit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        var _total_mark=0;
        $("._mark").each(function(){
            if($(this).val() != "")
            _total_mark += parseInt($(this).val());   
        });
        $("#total_mark").val(_total_mark);

        $(document).on("keyup", "._mark", function() {
            var total_mark=0;
            $("._mark").each(function(){
                if($(this).val() != "")
                total_mark += parseInt($(this).val());   
            });
            $("#total_mark").val(total_mark);
        });


        var _total_obt=0;
        $("._obt").each(function(){
            if($(this).val() != "")
            _total_obt += parseInt($(this).val());   
        });
        $("#total_obt").val(_total_obt);

        $(document).on("keyup", "._obt", function() {
            var total_obt=0;
            $("._obt").each(function(){
                if($(this).val() != "")
                total_obt += parseInt($(this).val());   
            });
            $("#total_obt").val(total_obt);
        });

    });
</script>
@endsection

