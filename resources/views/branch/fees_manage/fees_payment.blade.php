@extends('branch.app')
@section('title', 'Fees Payment')
@section('main')

@php 
    if(!empty($feesStudent)){
        $total_paids = $feesStudent[0]['stu_fees_manage'];
        $total_pay = 0;
        foreach($total_paids as $total_paid){
            $total_pay = $total_pay + $total_paid['receive_fee'];
        }
    }
@endphp

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Student</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Student Fee</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="" class="btn btn-primary">Fee Submission List</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-12">
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
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{URL::asset('assets/images/studentImgs/'.$student[0]['img'])}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110" height="110">
                                    <div class="mt-3">
                                        <h4>{{$student[0]['name']}}</h4>
                                        <p class="text-secondary mb-1">{{$student[0]['class']}}</p>
                                        <a href="/admin/student-profile/{{$student[0]['id']}}">
                                           <button class="btn btn-outline-primary">View Profile</button>
                                        </a>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                            <i class="bx bx-phone"></i>Mobile</h6>
                                        <span class="text-secondary">{{$student[0]['mob']}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                        <i class="bx bx-map"></i>City</h6>
                                        <span class="text-secondary">{{$student[0]['city']}}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">
                                        <i class="bx bx-home"></i>Address</h6>
                                        <span class="text-secondary">{{$student[0]['address']}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-5">
                        @if(!empty($feesStudent))
                        <form action="{{route('storeFeePayment')}}" method="post">
                            @csrf
                            <input type="hidden" name="reg_no" value="{{$feesStudent[0]['reg']}}">
                            <div class="border border-2 p-4 rounded">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="total_fee" class="form-label">Total Fee</label>
                                        <input type="text" class="form-control" name="total_fee" id="total_fee" value="{{$feesStudent[0]['fee']}}" placeholder="Total Fee" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="total_pay" class="form-label">Total Pay</label>
                                        <input type="text" class="form-control" name="total_pay" id="total_pay" value="{{$total_pay}}" placeholder="Total Pay" readonly style="background-color: #caebca;">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="total_due" class="form-label">Total Due</label>
                                        <input type="text" class="form-control" name="total_due" id="total_due" value="{{$feesStudent[0]['fee']-$total_pay}}" placeholder="Total Due" readonly style="background-color: #efc7c7;">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="receive_fee" class="form-label">Receice Fee</label>
                                        <input type="text" class="form-control" name="receive_fee" id="receive_fee" placeholder="Enter Receive Fee">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="left_due" class="form-label">Left Due</label>
                                        <input type="text" class="form-control" id="left_due" name="left_due" placeholder="Left Due" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label for="payment_mode" class="form-label">Payment Mode</label>
                                        <select class="form-select" name="payment_mode" id="payment_mode">
                                            <option value="">Select Payment Mode</option>
                                            <option value="1">Cash</option>
                                            <option value="2">Bank</option>
                                            <option value="3">UPI</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Pay</button>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </form>
                        @else
                            <div class="border border-2 p-4 rounded text-center">
                                <h4 class="text-danger">Fee is not settlement</h4>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#receive_fee').keyup(function(){
            var receive_fee = this.value;
            var total_due = $('#total_due').val();
            var left_due = total_due - receive_fee;

            $('#left_due').val(left_due);

            if(parseInt(receive_fee) > parseInt(total_due)){
                $('#receive_fee').val('');
                $('#left_due').val('');
                alert('Please enter a valid fee amount.');
            }
        });
    </script>
@endsection