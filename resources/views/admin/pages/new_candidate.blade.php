@extends('admin.app')
@section('main')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Candidate</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">New Candidate Entery</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('agentList')}}" class="btn btn-primary">List Candidate</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded"> 
                            <form class="row g-3 needs-validation"   method="post" enctype="multipart/form-data" action="{{ @$list->id ? route('agentUpdatePost') : route('addNewCandidateStore')}}">
                                @csrf
                                <input type="hidden" name="id" value="">
                                <div class="col-md-3">
                                    <label for="medical_date" class="form-label">Sr No *</label>
                                    <input type="text" class="form-control" name="sr_no" id="sr_no" value="{{ old('sr_no') }}{{ @$list->sr_no }}" required>
                                    @error('sr_no')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="medical_date" class="form-label">Medical Date *</label>
                                    <input type="date" class="form-control" name="medical_date" id="medical_date" value="{{ old('medical_date') }}{{ @$list->medical_date }}" required>
                                    @error('medical_date')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="can_name" class="form-label">Candidate Name *</label>
                                    <input type="text" class="form-control" name="can_name" id="can_name" value="{{ old('can_name') }}{{ @$list->can_name }}" required>
                                    @error('can_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label for="pp_no" class="form-label">Passport No:  *</label>
                                    <input type="text" class="form-control" name="pp_no" id="pp_no" value="{{ old('pp_no') }}{{ @$list->pp_no }}" required>
                                    @error('pp_no')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="dob" class="form-label">Date Of Birth:  </label>
                                    <input type="text" class="form-control" name="dob" id="dob" value="{{ old('dob') }}{{ @$list->dob }}" >
                                    @error('dob')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="mob" class="form-label">Mobile No:  </label>
                                    <input type="text" class="form-control" name="mob" id="mob" value="{{ old('mob') }}{{ @$list->mob }}" >
                                    @error('mob')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="trv_count" class="form-label">Travling Country:  </label>
									<select class="single-select" name="trv_count" id="trv_count">
										<option value="Select GCC country">Select GCC country</option>
										<option value="BH">Bahrain</option>
										<option value="KW">Kuwait</option>
										<option value="OM">Oman</option>
										<option value="QA">Qatar</option>
										<option value="SA">Saudi Arabia</option>
										<option value="UAE">UAE</option>
										<option value="YEM">Yemen</option>
									</select>
                                    @error('trv_count')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="col-md-4">
                                    <label for="travlesName" class="form-label">Position applied for:  </label>
									<select class="single-select" name="postion_applay" id="postion_applay" onchange="postion_applayFun(this.value)">
										<option value="Select Position">Select Position</option>
										<option value="BH">Banking &amp; Finance </option>
										<option value="KW">Carpenter</option>
										<option value="OM">Cashier</option>
										<option value="QA">Electrician</option>
										<option value="other">Other</option>
									</select>
                                    @error('postion_applay')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="col-md-4 d-none" id="other_postion">
                                    <label for="travlesName" class="form-label">Other:  </label>
											<input type="text" class="form-control" name="other_postion"  value="{{ old('other_postion') }}{{ @$list->other_postion }}" >
                                    @error('other_postion')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="col-md-4">
                                    <label for="travlesName" class="form-label">Medical Type *:  </label>
									<select class="single-select" name="medical_type" id="medical_type">
										<option value="Please Select">Please Select </option>
										<option value="FULL MEDICAL">FULL MEDICAL </option>
										<option value="XRAY ONLY">XRAY ONLY</option>
										<option value="BLOOD ONLY">BLOOD ONLY</option>
									</select>
                                    @error('medical_type')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="col-md-4">
                                    <label for="travlesName" class="form-label">Refrence : Agent / Self *  </label>
									<select class="single-select" name="ref_name" id="ref_name">
										<option value="Please Select">Please Select </option>
										<option value="SELF">SELF MEDICAL </option>
										@foreach($agentList as $listShow)
											<option value="{{$listShow->agent_id}}">{{$listShow->trv_name}}--{{$listShow->agent_name}}</option>
										@endforeach
									</select>
                                    @error('ref_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="col-md-4">
                                    <label for="medical_fee" class="form-label">Medical Fee :  </label>
                                    <input type="text" class="form-control" name="medical_fee" id="medical_fee" value="{{ old('medical_fee') }}{{ @$list->medical_fee }}" >
                                    @error('medical_fee')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
								<div class="col-md-4">
                                    <label for="paymnet_mood" class="form-label">Payment Mood *:  </label>
									<select class="single-select" name="paymnet_mood" id="paymnet_mood">
										<option value="Please Select">Please Select </option>
										<option value="Cash">Cash </option>
										<option value="Online">Online</option>
									</select>
                                    @error('paymnet_mood')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
<script>
 function postion_applayFun(){
     
     var postinApply = $('#postion_applay').val(); 
     
     if(postinApply == 'other')
        {
            $("#other_postion").removeClass('d-none');
        }
        else
        {
           
            $("#other_postion").addClass('d-none');
        }

}
</script>
@endsection

