<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewBranchAddController extends Controller
{
    public function NewBranchAdd()
    {
        return view('admin.pages.New_Branch_Add');
    }
}
