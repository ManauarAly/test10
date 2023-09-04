@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Marksheet New</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Certificate Details</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="http://127.0.0.1:8000/admin/list-enquiry" class="btn btn-primary">List Enquiry</a>
            </div>
        </div>
    </div>
    <section class="content-header">

        <div class="box box-default card">
            <form action="" name="myform" method="post" enctype="multipart/form-data">
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
                                <th scope="col">Roll No</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Trade</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>BHI845</td>
                                <td>AYAN SHEIKH</td>
                                <td>JAMIN ALI</td>
                                <td>Diploma in Refrigeration and Air Condition</td>
                                <td>A+</td>
                                <td>DRA</td>
                                <td>2021-08-21</td>
                                <td>
                                    <a data-toggle="modal" onclick="getid('23')" data-target="#myModal" style="cursor:pointer; color:red;"><i class="fa fa-trash"> </i></a>
                                    &nbsp; &nbsp; <a href="certificate.php?stcode=BHI845" title="Print Certificate"><i class="fa fa-certificate"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>BHI845</td>
                                <td>AYAN SHEIKH</td>
                                <td>JAMIN ALI</td>
                                <td>Diploma in Refrigeration and Air Condition</td>
                                <td>A+</td>
                                <td>DRA</td>
                                <td>2021-08-21</td>
                                <td>
                                    <a data-toggle="modal" onclick="getid('23')" data-target="#myModal" style="cursor:pointer; color:red;"><i class="fa fa-trash"> </i></a>
                                    &nbsp; &nbsp; <a href="certificate.php?stcode=BHI845" title="Print Certificate"><i class="fa fa-certificate"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>BHI845</td>
                                <td>AYAN SHEIKH</td>
                                <td>JAMIN ALI</td>
                                <td>Diploma in Refrigeration and Air Condition</td>
                                <td>A+</td>
                                <td>DRA</td>
                                <td>2021-08-21</td>
                                <td>
                                    <a data-toggle="modal" onclick="getid('23')" data-target="#myModal" style="cursor:pointer; color:red;"><i class="fa fa-trash"> </i></a>
                                    &nbsp; &nbsp; <a href="certificate.php?stcode=BHI845" title="Print Certificate"><i class="fa fa-certificate"></i></a>
                                </td>
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
            </form>

        </div>
    </section>

</div>
@endsection