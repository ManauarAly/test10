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
                    <li class="breadcrumb-item active" aria-current="page">Admit Card Details</li>
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
                <div class="col-md-8">
                    <input type="submit" name="submit" value="Print" class="btn btn-primary btn-md pull-left" onclick="return confirm('Are you sure you want to print?');">
                </div>
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
                        <th scope="col">Print</th>
                        <th scope="col">Roll No</th>
                        <th scope="col">Student</th>
                        <th scope="col">Exam Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Day</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="checkbox" name="ids[]" value="1"></td>
                        <td>Bh1571</td>
                        <td>SUJIT NISHAD</td>
                        <td>FIRST SEMESTER EXAMINATION AUG 2023</td>
                        <td>12/08/2023</td>
                        <td>02:00 PM</td>
                        <td>SATURDAY</td>
                        <td>
                            <div class="d-flex">
                                <i class="bi-trash"></i>
                                <i class="bi-plus-lg"></i>
                                <i class="bi-printer-fill"></i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="checkbox" name="ids[]" value="1"></td>
                        <td>Bh1571</td>
                        <td>SUJIT NISHAD</td>
                        <td>FIRST SEMESTER EXAMINATION AUG 2023</td>
                        <td>12/08/2023</td>
                        <td>02:00 PM</td>
                        <td>SATURDAY</td>
                        <td>
                            <div class="d-flex">
                                <i class="bi-trash"></i>
                                <i class="bi-plus-lg"></i>
                                <i class="bi-printer-fill"></i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="checkbox" name="ids[]" value="1"></td>
                        <td>Bh1571</td>
                        <td>SUJIT NISHAD</td>
                        <td>FIRST SEMESTER EXAMINATION AUG 2023</td>
                        <td>12/08/2023</td>
                        <td>02:00 PM</td>
                        <td>SATURDAY</td>
                        <td>
                            <div class="d-flex">
                                <i class="bi-trash"></i>
                                <i class="bi-plus-lg"></i>
                                <i class="bi-printer-fill"></i>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection