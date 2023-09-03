<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseMangController extends Controller
{
    public function courseManage()
    {
        return view('admin.pages.course_management');
    }

    public function storeCourseManage()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }  

}
