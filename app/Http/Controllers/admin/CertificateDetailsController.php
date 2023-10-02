<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;
use App\Models\MarksheetModel;

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

    // public function storeMarksheet(request $request)
    // {
    //     echo '<pre>';
    //     print_r($request->all());
    // }

    public function storeMarksheet(request $request)
    {
        $data = new MarksheetModel();
        $data->reg_no = $request['reg_no'];
        $data->stud_name = $request['stud_name'];
        $data->exam_name = $request['exam_name'];
        $data->theory_mark = $request['theory_mark'];
        $data->theory_obt = $request['theory_obt'];
        $data->prac_mark = $request['practical_mark'];
        $data->prac_obt = $request['practical_obt'];
        $data->viba_mark = $request['viba_mark'];
        $data->viba_obt = $request['viba_obt'];
        $data->attend_mark = $request['attnd_mark'];
        $data->attend_obt = $request['attnd_obt'];
        $data->book_mark = $request['notebook_mark'];
        $data->book_obt = $request['notebook_obt'];
        $data->pro_mark = $request['project_mark'];
        $data->pro_obt = $request['project_obt'];
        $data->total_mark = $request['total_mark'];
        $data->total_obt = $request['total_obt'];
        $data->save();
        if($data) {
            return redirect('admin/Result')->with('status', "Insert successfully");
        }else{
         return redirect('admin/Result')->with('failed', "There are someting error, please try some time.");
        }
    }

    public function viewMarksheet()
    {
        $marksheetDatas = MarksheetModel::all();
        return view('admin.admit_card_result.result')->with('marksheetDatas', $marksheetDatas);
    }

    public function dispStudmarksheet(request $request)
    {
        $data = $request->input();
        $checkbox_ids = $request['admit_card'];
        $students_data = MarksheetModel::whereIn('reg_no', $checkbox_ids)->get()->toArray();
        return view('admin.admit_card_result.disp_stud_marksheet')->with('students_data', $students_data);
    }

    public function branchcreateMarksheet($reg)
    {
        $data['student'] = StudentModel::where('reg', '=', $reg)->get()->toArray();
        return view('branch.admit_card_result.create_marksheet')->with('data', $data);
    }

    public function branchviewMarksheet()
    {
        $marksheetDatas = MarksheetModel::all();
        return view('branch.admit_card_result.result')->with('marksheetDatas', $marksheetDatas);
    }

    public function branchstoreMarksheet(request $request)
    {
        $data = new MarksheetModel();
        $data->reg_no = $request['reg_no'];
        $data->stud_name = $request['stud_name'];
        $data->exam_name = $request['exam_name'];
        $data->theory_mark = $request['theory_mark'];
        $data->theory_obt = $request['theory_obt'];
        $data->prac_mark = $request['practical_mark'];
        $data->prac_obt = $request['practical_obt'];
        $data->viba_mark = $request['viba_mark'];
        $data->viba_obt = $request['viba_obt'];
        $data->attend_mark = $request['attnd_mark'];
        $data->attend_obt = $request['attnd_obt'];
        $data->book_mark = $request['notebook_mark'];
        $data->book_obt = $request['notebook_obt'];
        $data->pro_mark = $request['project_mark'];
        $data->pro_obt = $request['project_obt'];
        $data->total_mark = $request['total_mark'];
        $data->total_obt = $request['total_obt'];
        $data->save();
        if($data) {
            return redirect('admin/Result')->with('status', "Insert successfully");
        }else{
            return redirect('admin/Result')->with('failed', "There are someting error, please try some time.");
        }
    }

    public function branchdispStudmarksheet(request $request)
    {
        $data = $request->input();
        $checkbox_ids = $request['admit_card'];
        $students_data = MarksheetModel::whereIn('reg_no', $checkbox_ids)->get()->toArray();
        return view('admin.admit_card_result.disp_stud_marksheet')->with('students_data', $students_data);
    }

}
