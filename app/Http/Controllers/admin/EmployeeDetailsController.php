<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeDetailsController extends Controller
{
    public function EmployeeDetails()
    {
        return view('admin.pages.Employee_Details');
    }
}
