<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;
use App\Models\StudentAdminCard;

class AdmitCardDetailsController extends Controller
{
    public function createAdmitCard()
    {
        $stuDatas = StudentModel::orderBy('id', 'DESC')->get();
        return view('admin.admit_card_result.Create_Admit_Card')->with('stuDatas', $stuDatas);
    }

    public function admitCardPrint(request $request)
    {
        $regs = $request['_reg_no'];

        foreach($regs as $reg){

            if(empty(StudentAdminCard::where('stu_reg_no', $reg))){

                $crtAdmtData = new StudentAdminCard();
                $crtAdmtData->stu_reg_no = $reg;
                $crtAdmtData->exam_name  = $request['adc_exam_name'];
                $crtAdmtData->exam_date  = $request['adc_exam_date'];
                $crtAdmtData->exam_time  = $request['adc_exam_time'];
                $crtAdmtData->exam_day   = $request['adc_exam_day'];
                $crtAdmtData->save();

            }
        }

        $_stu_data = StudentAdminCard::with('stuAdminWithStudent')->whereIn('stu_reg_no', $regs)->get()->toArray();
        return view('admin.admit_card_result.admit_card_print')->with('_stu_data', $_stu_data);
    }

    public function admitCardForm(request $request)
    {
        $ids = $request['_stu_reg'];
        $stu_data = StudentModel::whereIn('id', $ids)->get()->toArray();
        return view('admin.admit_card_result.admin_card_form')->with('data_stu', $stu_data);
    }

    public function viewAdmitCard($reg)
    {
        $_stu_data = StudentAdminCard::with('stuAdminWithStudent')->where('stu_reg_no', $reg)->get()->toArray();
        return view('admin.admit_card_result.admit_card_print')->with('_stu_data', $_stu_data);
    }

    public function admitCardDtails()
    {
        $stu_data = StudentAdminCard::with('stuAdminWithStudent')->get()->toArray();
        return view('admin.admit_card_result.Admit_Card_Details')->with('data_stu', $stu_data);
    }

}
