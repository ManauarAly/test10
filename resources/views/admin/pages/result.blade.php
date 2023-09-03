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
                    <li class="breadcrumb-item active" aria-current="page">Result</li>
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
                        <th scope="col">Total Mark</th>
                        <th scope="col">Total Obtain</th>
                        <th scope="col">Percentage</th>
                        <th scope="col">Result</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="checkbox" name="ids[]" value="1"></td>
                        <td>Bh1571</td>
                        <td>SUJIT NISHAD</td>
                        <td>100</td>
                        <td>82</td>
                        <td>82</td>
                        <td>PASSED</td>
                        <td><i class="bi-printer-fill"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="checkbox" name="ids[]" value="1"></td>
                        <td>Bh1571</td>
                        <td>SUJIT NISHAD</td>
                        <td>100</td>
                        <td>82</td>
                        <td>82</td>
                        <td>PASSED</td>
                        <td><i class="bi-printer-fill"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="checkbox" name="ids[]" value="1"></td>
                        <td>Bh1571</td>
                        <td>SUJIT NISHAD</td>
                        <td>100</td>
                        <td>82</td>
                        <td>82</td>
                        <td>PASSED</td>
                        <td><i class="bi-printer-fill"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    @endsection