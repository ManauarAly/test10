@extends('admin.app')
@section('title', 'Student List')
@section('main')

<style>
    #studentAction .modal-body div a:hover{
        background: #dddddd;
    }
</style>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Student</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Student List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('newStudent')}}" class="btn btn-primary">New Admission</a> 
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
                                    <div class="d-none">
                                        <a class="border p-1 px-2 text-center" href="student-profile/{{$stuData->id}}" title="View Student Profile"><i class="bx bx-low-vision" style="color:#2A5A74;"></i><p>Student Profile</p></a>
                                        <a class="border p-1 px-2 text-center" href="print-marksheet/{{$stuData->reg}}" title="Marksheet Create"><i class="bx bx-book" style="color:#2A5A74;"></i><p>Print Marksheet</p></a>
                                        <a class="border p-1 px-2 text-center delAdmStu" href="javascript:void(0)" data-id="{{$stuData->id}}" title="Delete Student"><i class="bx bx-trash" style="color:#FF0000;"></i><p>Delete Student</p></a>
                                        <a class="border p-1 px-2 text-center" href="admission-print/{{$stuData->id}}" target="_blank" title="View Details"><i class="bx bx-printer" style="color:#0066FF;"></i><p>Admission Print</p></a>
                                        <a class="border p-1 px-2 text-center" href="student-edit/{{$stuData->id}}" title="Edit Student Data"><i class="bx bx-edit" style="color:#009966;"></i><p>Edit Student</p></a>                                
                                        <a class="border p-1 px-2 text-center" href="view-admit-card/{{$stuData->reg}}" title="Admit Card Print"><i class="bx bx-credit-card-front"></i><p>Admit Card Print</p></a>
                                        <a class="border p-1 px-2 text-center" href="view-i-card/{{$stuData->reg}}" title="Print ID Card"><i class="bx bx-book"></i><p>Print ID Card</p></a>
                                    </div>

                                    <button class="btn btn-primary btn-sm view-action" data-id="{{$stuData->id}}">View Action</button>
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

    <div id="studentAction" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).on('click', '.view-action', function(){
            var _id = $(this).data('id');
            var _action = $('#stu-id-'+_id+' td:nth-child(8) div').html();
            var _reg = $('#stu-id-'+_id+' td:nth-child(1)').html();
            var _title = $('#stu-id-'+_id+' td:nth-child(3)').html()+' ('+_reg+')';

            $("#studentAction .modal-title").html(_title);
            $("#studentAction .modal-body div").html(_action);
            $("#studentAction").modal('show');
        });

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
                                $('#stu-id-'+delStuId).hide();
                                $("#studentAction").modal('hide');
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

