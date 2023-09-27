@extends('admin.app')
@section('main')
<form action="{{route('dispStudIdCard')}}" target="_blank" method="post">
    @csrf                    
    <div class="col-md-3">
        <input type="submit" name="submit" value="Print" class="btn btn-primary btn-md pull-left">
    </div>

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Student</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List All</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{route('newStudent')}}" class="btn btn-primary">Add New Agent</a> 
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Reg No</th>
                                <th width="10%">Class</th>
                                <th>Name</th>
                                <th>Father</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studlists as $studlist)
                            <tr id="stu-id-{{$studlist->id}}">
                                <td><input type="checkbox" name="student_icard[]" value="{{$studlist->reg}}" class="stud_icard"/></td>
                                <td>{{$studlist->reg}}</td>
                                <td>{{$studlist->class}}</td>
                                <td>{{$studlist->name}}</td>
                                <td>{{$studlist->father}}</td>
                                <td>{{$studlist->gender}}</td>
                                <td>{{$studlist->dob}}</td>
                                <td>{{$studlist->mob}}</td>
                                <td>
                                    <a href="javascript:void(0)" data-id="{{$studlist->id}}" class="stud_id_card" title="Delete Student Data"><i class="bx bx-trash" style="color:#FF0000;"></i></a>                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Reg No</th>
                                <th width="10%">Class</th>
                                <th>Name</th>
                                <th>Father</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</form>
@endsection

