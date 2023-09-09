<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;

class FeesManController extends Controller
{
    public function feeSubmission()
    {
        $stuDatas = StudentModel::orderBy('id', 'DESC')->get();
        return view('admin.fees_manage.fee_submission')->with('stuDatas', $stuDatas);
    }
}
