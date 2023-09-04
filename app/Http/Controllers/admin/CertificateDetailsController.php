<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificateDetailsController extends Controller
{
    public function CertificateDetails()
    {
        return view('admin.pages.Certificate_Details');
    }
}
