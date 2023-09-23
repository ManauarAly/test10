@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Employee Management</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Employee Details</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">EmpID</th> 
                        <th scope="col">Joing Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Post</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Action</th> 
                    </tr>
                </thead>
                <tbody>
                @foreach ($employeelists as $employeelist)
                <tr id="employeeId-{{$employeelist->emp_id}}">
                    <td>{{$employeelist->emp_id }}</td>
                    <td>{{$employeelist->emp_join_date}}</td>
                    <td>{{$employeelist->emp_name}}</td>
                    <td>{{$employeelist->emp_post}}</td>
                    <td>{{$employeelist->emp_gender}}</td>
                    <td>{{$employeelist->emp_dob}}</td>                        
                    <td>{{$employeelist->emp_contact_no}}</td>                        
                    <td><a href="javascript:void(0)" data-id="{{$employeelist->emp_id}}" class="delemployee" title="Delete Employeeent Data"><i class="bx bx-trash" style="color:#FF0000;"></i></a></td>                        
                </tr>
                    @endforeach                   
                </tbody>
            </table>

            <div class="row">
                <div class="col-sm-7">
                    <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 3,558 entries</div>
                </div>
                <div class="col-sm-5">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('script')
        <script>
            $('body').on('click', '.delemployee', function(){
                var delempId = $(this).data('id');
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
                        $.ajax({
                            type:'POST',
                            url:'{{route("deleteEmp")}}',
                            data: {'_token':'<?php echo csrf_token() ?>', 'employeeId':delempId},
                            success:function(data) {
                                if(data.type==1){
                                    console.log($('#employeeId-'+delempId));
                                    $('#employeeId-'+delempId).hide();
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