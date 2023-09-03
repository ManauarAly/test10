<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeeSubmissionController extends Controller
{
    public function FeeSubmission()
    {
        return view('admin.pages.Fee_Submission');
    }
}
