@extends('admin.app')
@section('main')

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Admit Card </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Student</li>
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

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Roll No</th>
                        <th scope="col">Student</th>
                        <th scope="col">Exam Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Day</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Abhi101</td>
                        <td>KM.KHUSHBOO YADAV</td>
                        <td>2ND</td>
                        <td>12/09/2022</td>
                        <td>2:00</td>
                        <td>MONDAY</td>
                    </tr>
                    <tr>
                        <td>Abhi101</td>
                        <td>KM.KHUSHBOO YADAV</td>
                        <td>2ND</td>
                        <td>12/09/2022</td>
                        <td>2:00</td>
                        <td>MONDAY</td>
                    </tr>
                    <tr>
                        <td>Abhi101</td>
                        <td>KM.KHUSHBOO YADAV</td>
                        <td>2ND</td>
                        <td>12/09/2022</td>
                        <td>2:00</td>
                        <td>MONDAY</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    @endsection