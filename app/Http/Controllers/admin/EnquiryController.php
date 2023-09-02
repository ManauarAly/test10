<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Session;
use App\Models\StuEnqModel;
// use App\Models\CandidateModel;


class EnquiryController extends Controller
{
    public function addNewEnquiry()
    {
        return view('admin.pages.add_new_enquiry');
    }
    
    public function storeNewEnquiry(request $request)
    {
        $data = $request->input();
        try{
            $stuEnqData = new StuEnqModel();
            $stuEnqData->reg    = $data['enq_no'];
            $stuEnqData->name   = $data['enq_stu_name'];
            $stuEnqData->gender = $data['enq_gender'];
            $stuEnqData->dob    = $data['enq_dob'];
            $stuEnqData->class  = $data['enq_board'];
            $stuEnqData->fee    = $data['enq_fee'];
            $stuEnqData->gardian = $data['enq_gua_mobile_no'];
            $stuEnqData->father  = $data['enq_father_name'];
            $stuEnqData->mob     = $data['enq_mobile_no'];
            $stuEnqData->address = $data['enq_address'];
            $stuEnqData->last_school = $data['enq_school_name'];
            $stuEnqData->last_board  = $data['enq_board'];
            $stuEnqData->city = $data['enq_city'];
            $stuEnqData->date = date('Y-m-d');
            $stuEnqData->time = date('H:i:s');
            $stuEnqData->by   = $data['enq_stu_name'];
            $stuEnqData->ssn  = $data['enq_session'];
            $stuEnqData->status     = 'Pending';
            $stuEnqData->updated_at = date('Y-m-d H:i:s');
            $stuEnqData->created_at = date('Y-m-d H:i:s');
            $stuEnqData->save();

            return redirect('admin/add-new-enquiry')->with('status',"Insert successfully");

        }
        catch(Exception $e){
            return redirect('insert')->with('failed',"operation failed");
        }
    }
    
    public function listEnquiry()
    {
        $stuEnqDatas = StuEnqModel::all();
        return view('admin.pages.enquriy_list')->with('stuEnqDatas', $stuEnqDatas);
    }

    public function delEnquiry(request $request)
    {
        $data = $request->input();
        $delData = StuEnqModel::where('id', $data['stuEnqId'])->delete();
        if($delData){
            $msg = "Successfully deleted enquiry";
            $type = 1;
            $status = 200;
        }else{
            $msg = "There are some issue, please try some time";
            $type = 0;
            $status = 400;
        }
        return response()->json(array('type'=>$type, 'msg'=>$msg), $status);
    }

}
