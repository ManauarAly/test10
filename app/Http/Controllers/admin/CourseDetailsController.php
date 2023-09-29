<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;

class CourseDetailsController extends Controller
{
    public function CourseDetails()
    {
        return view('admin.pages.Course_Details');
    }

    public function createMarksheet($reg)
    {
        $data['student'] = StudentModel::where('reg', '=', $reg)->get()->toArray();
        return view('admin.admit_card_result.create_marksheet')->with('data', $data);
    }

}
