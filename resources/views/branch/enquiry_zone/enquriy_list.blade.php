@extends('branch.app')
@section('title', 'Branch Enquiry List')
@section('main')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Agent</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Branch List All</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="" class="btn btn-primary">Add New Agent</a> 
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
                                <th>Enq No</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Fee</th>
                                <th>Father</th>
                                <th>City</th>
                                <th>School & Board</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stuEnqDatas as $stuEnqData)
                            <tr class="enqStu-{{$stuEnqData->id}}">
                                <td>{{$stuEnqData->reg}}</td>
                                <td>{{$stuEnqData->name}}</td>
                                <td>{{$stuEnqData->class}}</td>
                                <td>{{$stuEnqData->fee}}</td>
                                <td>{{$stuEnqData->father}}</td>
                                <td>{{$stuEnqData->city}}</td>
                                <td>
                                    <b>School -</b>{{$stuEnqData->last_school}}<br>
                                    <b>Board -</b>{{$stuEnqData->last_board}}
                                </td>
                                <td>{{$stuEnqData->mob}}</td>
                                <td>
                                    <a href="javascript:void(0)" data-id="{{$stuEnqData->id}}" class="btn btn-danger del-enq-stu"><i class="bx bx-trash-alt"></i></a>
                                    <a href="" class="btn btn-success"><i class="bx bx-plus"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Enq No</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Fee</th>
                                <th>Father</th>
                                <th>City</th>
                                <th>School & Board</th>
                                <th>Mobile</th>
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
        $('body').on('click', '.del-enq-stu', function(){
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
                    // console.log('true');
                    // console.log(delStuId);
                    $.ajax({
                        type:'POST',
                        url:'{{route("delEnquiry")}}',
                        data: {'_token':'<?php echo csrf_token() ?>', 'stuEnqId':delStuId},
                        success:function(data) {
                            if(data.type==1){
                                console.log(data.msg);
                                $('.enqStu-'+delStuId).hide();
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

