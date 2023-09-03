<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    public function CourseDetails()
    {
        return view('admin.pages.Course_Details');
    }
}
