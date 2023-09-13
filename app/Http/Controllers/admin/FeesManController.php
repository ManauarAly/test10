<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;
use App\Models\FeesMangModel;
use App\Models\FeesSubmissonModel;

class FeesManController extends Controller
{
    public function feeSubmission()
    {
        $stuDatas = StudentModel::orderBy('id', 'DESC')->get();
        return view('admin.fees_manage.fee_submission')->with('stuDatas', $stuDatas);
    }

    public function feePayment($reg_no)
    {
        $student = StudentModel::where('reg', '=', $reg_no)->get()->toArray();
        $feesStudent = FeesMangModel::with('stuFeesManage')->where('reg', '=', $reg_no)->get()->toArray();
        return view('admin.fees_manage.fees_payment')->with('student',  $student)->with('feesStudent', $feesStudent);
    }

    public function storeFeePayment(request $request)
    {
        $data = $request->input();
        try{

            $stu_fee_data = new FeesSubmissonModel();
            $stu_fee_data->reg = $data['reg_no'];
            $stu_fee_data->receive_fee = $data['receive_fee'];
            $stu_fee_data->payment_mode = $data['payment_mode'];
            $stu_fee_data->updated_at = date('Y-m-d H:i:s');
            $stu_fee_data->created_at = date('Y-m-d H:i:s');
            $stu_fee_data->save();

            $stuAdSavedId = $stu_fee_data->id;
            if($stuAdSavedId){
                return redirect('admin/fee-payment/'.$data['reg_no'])->with('status',"Insert successfully");
            }else{
                return redirect('admin/fee-payment/'.$data['reg_no'])->with('failed',"There are someting error, please try some time.");
            }

        }catch(Exception $e){
            return redirect('admin/new-student')->with('failed',"operation failed");
        }
    }

    public function feePaymentPrint()
    {
        return view('admin.fees_manage.fee_payment_print');
    }


}
