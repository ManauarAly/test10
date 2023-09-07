@extends('admin.app')
@section('main')
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
                    <a href="{{route('courseManage')}}" class="btn btn-primary">Add Course & Subject</a> 
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
                                <th>Course Name</th>
                                <th>Course Fee</th>
                                <th>Course Duration</th>
                                <th>Course Exam</th>
                                <th>Course Subjects</th>
                                <th>Created date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courseSubjects as $courseSubject)
                            <tr>
                                <td>{{$courseSubject['course_name']}}</td>
                                <td>{{$courseSubject['course_fee']}}</td>
                                <td>{{$courseSubject['course_duration']}}</td>
                                <td>{{$courseSubject['course_exam']}}</td>
                                <td>
                                    @foreach($courseSubject['course_subjects'] as $key => $course_subject)
                                        {{$course_subject['subject']}}
                                        @if($key < (count($courseSubject['course_subjects']) -1))
                                            {{","}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{date('d/m/Y', strtotime($courseSubject['created_at']))}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Course Name</th>
                                <th>Course Fee</th>
                                <th>Course Duration</th>
                                <th>Course Exam</th>
                                <th>Course Subjects</th>
                                <th>Created date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection