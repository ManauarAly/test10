<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmitCardDetailsController extends Controller
{
    public function AdmitCardDetails()
    {
        return view('admin.pages.Admit_Card_Details');
    }
}
