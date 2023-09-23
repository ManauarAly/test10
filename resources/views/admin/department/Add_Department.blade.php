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
                    <li class="breadcrumb-item active" aria-current="page">Add Department</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
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
    <div class="box-header">
        <form action="{{route('storeDept')}}" target="_blank" method="post">
        @csrf
            <div class="row mb-3">
                <div class="col-md-4 d-flex align-items-center">
                    <label for="" style="width: 200px;">Department:</label>
                    <input type="text" class="form-control mx-2" id="myInput" name="dept_name" onkeyup="myFunction()" placeholder="">
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="box-header">
                <form action="admitCardPrint.php" target="_blank" method="post">

                    <div class="row mb-3">
                        <div class="col-md-3 d-flex align-items-center">
                            <label for="">Show</label>
                            <select class="form-select mx-2" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="">Entries</label>
                        </div>
                        <div class="col-md-5"></div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Reg Number..">
                        </div>
                    </div>
                </form>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Class</th> 
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($deptlists as $deptlist)
                <tr id="deptId-{{$deptlist->dept_id}}">
                    <td>{{$deptlist->dept_name }}</td>                        
                    <td><a href="javascript:void(0)" data-id="{{$deptlist->dept_id}}" class="delDept" title="Delete Employeeent Data"><i class="bx bx-trash" style="color:#FF0000;"></i></a></td>                        
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
</div>
    @endsection

    @section('script')
        <script>
            $('body').on('click', '.delDept', function(){
                var delDeptId = $(this).data('id');
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
                            url:'{{route("delDept")}}',
                            data: {'_token':'<?php echo csrf_token() ?>', 'deptId':delDeptId},
                            success:function(data) {
                                if(data.type==1){
                                    console.log(data.msg);
                                    $('#deptId-'+delDeptId).hide();
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