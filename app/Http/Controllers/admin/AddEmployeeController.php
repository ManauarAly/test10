<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddEmployeeController extends Controller
{
    public function AddEmployee()
    {
        return view('admin.pages.Add_Employee');
    }
}
