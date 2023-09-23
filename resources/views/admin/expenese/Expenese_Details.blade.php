@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Account/Finance</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Expenese Details (<i class="fa fa-rupee"></i> 0/-)</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
            </div>
        </div>
    </div>

    <div class="box-header">
        <form action="admitCardPrint.php" target="_blank" method="post">

            <div class="row mb-3">
                <div class="col-md-4 d-flex align-items-center">
                    <label for="" style="width: 300px;">Select Class:</label>
                    <select class="form-select mx-2" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">Search</a>
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
                        <th scope="col">Sr</th>
                        <th scope="col">Purpose</th>
                        <th scope="col">Amount</th>
                        <th scope="col">By</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> 
                @foreach ($expenselists as $expenselist)
                <tr id="expenseId-{{$expenselist->expense_id}}">
                    <td>{{$expenselist->expense_id }}</td>
                    <td>{{$expenselist->expense_date}}</td>
                    <td>{{$expenselist->expense_purpose}}</td>
                    <td>{{$expenselist->expense_amount}}</td>
                    <td>{{$expenselist->expense_by}}</td>                       
                    <td><a href="javascript:void(0)" data-id="{{$expenselist->expense_id}}" class="delexpense" title="Delete Employeeent Data"><i class="bx bx-trash" style="color:#FF0000;"></i></a></td>                        
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
            $('body').on('click', '.delexpense', function(){
                var delexpId = $(this).data('id');
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
                            url:'{{route("delExpeneseDetails")}}',
                            data: {'_token':'<?php echo csrf_token() ?>', 'expenseId':delexpId},
                            success:function(data) {
                                if(data.type==1){
                                    console.log($('#expenseId-'+delexpId));
                                    $('#expenseId-'+delexpId).hide();
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