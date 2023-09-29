<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;

class CertificateDetailsController extends Controller
{
    public function CertificateDetails()
    {
        return view('admin.pages.Certificate_Details');
    }

    public function createMarksheet($reg)
    {
        $data['student'] = StudentModel::where('reg', '=', $reg)->get()->toArray();
        return view('admin.admit_card_result.create_marksheet')->with('data', $data);
    }

    public function storeMarksheet(request $request)
    {
        echo '<pre>';
        print_r($request->all());
    }

}
