@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Branch Website Add</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Branch Details</li>
                </ol>
            </nav>
        </div>
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
                        <th scope="col">Branch Name</th>
                        <th scope="col">Branch Head</th>
                        <th scope="col">Branch Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="gradeX odd" role="row">
                        <td class="sorting_1">GENIUS COMPUTER TRAINING INSTITUTE</td>
                        <td>RAM AVATAR YADAV</td>
                        <td> Bhimber-Azamgarh (U.P)</td>
                        <td>centergenius52@gmail.com</td>
                        <td>8423847321</td>

                        <td><img src="../photo/directorpic/22407bg-p.jpg" class="img-circle" height="80" width="80"></td>

                        <td><a data-toggle="modal" onclick="getid('25')" data-target="#myModal" style="cursor:pointer; color:red;"><i class="fa fa-trash"> </i></a> &nbsp; &nbsp; &nbsp;<a href="branch_edit_all.php?brc=25"><i class="fa fa-pencil" style="font-size:20px; background-color:#0000FF; padding:5px; color:white;"></i></a></td>
                    </tr>
                    <tr class="gradeX odd" role="row">
                        <td class="sorting_1">GENIUS COMPUTER TRAINING INSTITUTE</td>
                        <td>RAM AVATAR YADAV</td>
                        <td> Bhimber-Azamgarh (U.P)</td>
                        <td>centergenius52@gmail.com</td>
                        <td>8423847321</td>

                        <td><img src="../photo/directorpic/22407bg-p.jpg" class="img-circle" height="80" width="80"></td>

                        <td><a data-toggle="modal" onclick="getid('25')" data-target="#myModal" style="cursor:pointer; color:red;"><i class="fa fa-trash"> </i></a> &nbsp; &nbsp; &nbsp;<a href="branch_edit_all.php?brc=25"><i class="fa fa-pencil" style="font-size:20px; background-color:#0000FF; padding:5px; color:white;"></i></a></td>
                    </tr>
                    <tr class="gradeX odd" role="row">
                        <td class="sorting_1">GENIUS COMPUTER TRAINING INSTITUTE</td>
                        <td>RAM AVATAR YADAV</td>
                        <td> Bhimber-Azamgarh (U.P)</td>
                        <td>centergenius52@gmail.com</td>
                        <td>8423847321</td>

                        <td><img src="../photo/directorpic/22407bg-p.jpg" class="img-circle" height="80" width="80"></td>

                        <td><a data-toggle="modal" onclick="getid('25')" data-target="#myModal" style="cursor:pointer; color:red;"><i class="fa fa-trash"> </i></a> &nbsp; &nbsp; &nbsp;<a href="branch_edit_all.php?brc=25"><i class="fa fa-pencil" style="font-size:20px; background-color:#0000FF; padding:5px; color:white;"></i></a></td>
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


    @endsection