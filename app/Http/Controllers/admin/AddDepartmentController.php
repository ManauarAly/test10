<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddDepartmentController extends Controller
{
    public function AddDepartment()
    {
        return view('admin.pages.Add_Department');
    }
}
