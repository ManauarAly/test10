<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;

class AdmitCardDetailsController extends Controller
{
    public function createAdmitCard()
    {
        $stuDatas = StudentModel::orderBy('id', 'DESC')->get();
        return view('admin.admit_card_result.Create_Admit_Card')->with('stuDatas', $stuDatas);
    }

    public function admitCardPrint()
    {
        return view('admin.admit_card_result.admit_card_print');
    }

    public function admitCardForm(request $request)
    {
        $ids = $request['_stu_reg'];
        $stu_data = StudentModel::whereIn('id', $ids)->get()->toArray();
        return view('admin.admit_card_result.admin_card_form')->with('data_stu', $stu_data);
    }

}
