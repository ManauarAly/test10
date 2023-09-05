<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpeneseDetailsController extends Controller
{
    public function ExpeneseDetails()
    {
        return view('admin.pages.Expenese_Details');
    }
}
