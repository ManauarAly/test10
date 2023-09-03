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
                    <li class="breadcrumb-item active" aria-current="page">Create Admit Card</li>
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
                        <th scope="col">Select</th>
                        <th scope="col">Roll No</th>
                        <th scope="col">Student</th>
                        <th scope="col">Course</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="checkbox" name="ids[]" value="1"></td>
                        <td>Bh1571</td>
                        <td>SUJIT NISHAD</td>
                        <td>CCA</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="checkbox" name="ids[]" value="2"></td>
                        <td>Bh1572</td>
                        <td>SUJIT NISHAD</td>
                        <td>CCA</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="checkbox" name="ids[]" value="3"></td>
                        <td>Bh1573</td>
                        <td>SUJIT NISHAD</td>
                        <td>CCA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection