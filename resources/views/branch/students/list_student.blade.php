@extends('branch.app')
@section('title', 'Branch Admission List')
@section('main')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Student</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List All</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('newStudent')}}" class="btn btn-primary">Add New Agent</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Reg No</th>
                                <th width="10%">Class</th>
                                <th>Name</th>
                                <th>Father</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stuDatas as $stuData)
                            <tr id="stu-id-{{$stuData->id}}">
                                <td>{{$stuData->reg}}</td>
                                <td>{{$stuData->class}}</td>
                                <td>{{$stuData->name}}</td>
                                <td>{{$stuData->father}}</td>
                                <td>{{$stuData->gender}}</td>
                                <td>{{$stuData->dob}}</td>
                                <td>{{$stuData->mob}}</td>
                                <td>
                                    <a href="student-profile/{{$stuData->id}}" title="View Student Profile"><i class="bx bx-low-vision" style="color:#2A5A74;"></i></a>
                                    <a href="marksheet_create?ncid={{$stuData->id}}" title="Marksheet Create"><i class="bx bx-book" style="color:#2A5A74;"></i></a>
                                    <a href="javascript:void(0)" data-id="{{$stuData->id}}" class="delAdmStu" title="Delete Student Data"><i class="bx bx-trash" style="color:#FF0000;"></i></a>
                                    <a href="admission-print/{{$stuData->id}}" target="_blank" title="View Details"><i class="bx bx-printer" style="color:#0066FF;"></i></a><br>
                                    <a href="student-edit/{{$stuData->id}}" title="Edit Student Data"><i class="bx bx-edit" style="color:#009966;"></i></a>                                
                                    <a href="admitCardCreate?ncid={{$stuData->id}}" title="Admit Card Print" class="text-dark"><i class="bx bx-credit-card-front"></i></a>
                                    <a href="student_id_card?ncid={{$stuData->id}}" title="Print ID Card"><i class="bx bx-book"></i></a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Reg No</th>
                                <th width="10%">Class</th>
                                <th>Name</th>
                                <th>Father</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>

    @section('script')
        <script>
            $('body').on('click', '.delAdmStu', function(){
                var delStuId = $(this).data('id');
                swal({
                    title: "Are you sure?",
                    text: "You want to delete.",
                    icon: "warning",
                    dangerMode: true,
                    buttons: {
                        cancel : 'No',
                        confirm : {text:'Yes',className:'sweet-warning'},
                    }

                }).then((willDelete) => {
                    if (willDelete) {
                        console.log('true');
                        // console.log(delStuId);
                        $.ajax({
                            type:'POST',
                            url:'{{route("delStudent")}}',
                            data: {'_token':'<?php echo csrf_token() ?>', 'stuId':delStuId},
                            success:function(data) {
                                if(data.type==1){
                                    console.log(data.msg);
                                    $('#stu-id-'+delStuId).hide();
                                }else if(data.type==0){
                                    console.log(data.msg);
                                }
                                
                            }
                        });

                    } else {
                        console.log('false');
                    }
                });
            })
        </script>
    @endsection

@endsection

