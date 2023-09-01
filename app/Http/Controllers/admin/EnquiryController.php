<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Session;
// use App\Models\AgentModel;
// use App\Models\CandidateModel;


class EnquiryController extends Controller
{
    public function addNewEnquiry()
    {
        return view('admin.pages.add_new_enquiry');
    }

    public function listEnquiry()
    {
        return view('admin.pages.enquriy_list');
    }
    

    


}
