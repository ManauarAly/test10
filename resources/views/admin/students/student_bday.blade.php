@extends('admin.app')
@section('title', 'List Enquiry')
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
                        <li class="breadcrumb-item active" aria-current="page">Birthday List</li>
                    </ol>
                </nav>
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
                                <th>Name</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Class</th>
                                <th>Father</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stubdayDatas as $stubdayData)
                            <tr class="enqStu-{{$stubdayData->id}}">
                                <td>{{$stubdayData->reg}}</td>
                                <td>{{$stubdayData->name}}</td>
                                <td>{{$stubdayData->gender}}</td>
                                <td>
                                    {{$stubdayData->dob}}
                                    @if( strtotime( $stubdayData->dob ) == strtotime(date('Y-m-d')) )
                                    {{'!!! Happy Birthday !!!'}}
                                    @endif
                                </td>
                                <td>{{$stubdayData->class}}</td>
                                <td>{{$stubdayData->father}}</td>                        
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                                <th>Reg No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Class</th>
                                <th>Father</th>
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

