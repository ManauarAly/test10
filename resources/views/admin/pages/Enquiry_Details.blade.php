@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Enquiry Details</div>
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
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Cources</th>
                        <th scope="col">Data</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Balram rawat</td>
                        <td>maxgktrick1782@gmail.com</td>
                        <td>9721925667</td>
                        <td>DCA</td>
                        <td>24/08/2019</td>
                        <td><i class="fa fa-trash"></i> Delete</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Balram rawat</td>
                        <td>maxgktrick1782@gmail.com</td>
                        <td>9721925667</td>
                        <td>DCA</td>
                        <td>24/08/2019</td>
                        <td><i class="fa fa-trash"></i> Delete</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Balram rawat</td>
                        <td>maxgktrick1782@gmail.com</td>
                        <td>9721925667</td>
                        <td>DCA</td>
                        <td>24/08/2019</td>
                        <td><i class="fa fa-trash"></i> Delete</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Balram rawat</td>
                        <td>maxgktrick1782@gmail.com</td>
                        <td>9721925667</td>
                        <td>DCA</td>
                        <td>24/08/2019</td>
                        <td><i class="fa fa-trash"></i> Delete</td>
                    </tr>
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