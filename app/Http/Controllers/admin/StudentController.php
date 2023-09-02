<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;
use App\Models\StuEnqModel;

class StudentController extends Controller
{
    public function newStudent()
    {
        if(isset($_GET['id'])){
            $students = StuEnqModel::find($_GET['id']);
        }else{
            $students = '';
        }
        return view('admin.pages.new_student')->with('students', $students);
    }

    public function storeNewStudent(request $request)
    {
        $data = $request->input();
        try{

        $fileName = time() . '.' . $request->file->extension();
        $moveFile = $request->file->move(public_path('assets/images/studentImgs'), $fileName);

            $stuAdData = new StudentModel();
            $stuAdData->reg    = $data['ad_reg_no'];
            $stuAdData->admission_date   = $data['ad_date'];
            $stuAdData->regular = $data['ad_regular'];
            $stuAdData->select_branch    = $data['ad_branch'];
            $stuAdData->name  = $data['enq_stu_name'];
            $stuAdData->gender    = $data['enq_gender'];
            $stuAdData->dob = $data['enq_dob'];
            $stuAdData->class  = $data['enq_course'];
            $stuAdData->gardian     = $data['enq_gua_mobile_no'];
            $stuAdData->father = $data['enq_father_name'];
            $stuAdData->city = $data['enq_city'];
            $stuAdData->mob  = $data['enq_mobile_no'];
            $stuAdData->address = $data['enq_address'];
            $stuAdData->last_school = $data['enq_school_name'];
            $stuAdData->board = $data['enq_board'];
            $stuAdData->img = $fileName;
            $stuAdData->board = $data['enq_board'];
            $stuAdData->date = date('Y-m-d');
            $stuAdData->time = date('H:i:s');
            $stuAdData->by   = $data['enq_stu_name'];
            $stuAdData->session  = $data['ad_session'];
            $stuAdData->fee  = $data['enq_fee'];
            $stuAdData->course_id  = 10;
            $stuAdData->updated_at = date('Y-m-d H:i:s');
            $stuAdData->created_at = date('Y-m-d H:i:s');
            $stuAdData->save();

            if(isset($_GET['id'])){
                $comfirm_id = $_GET['id'];
                StuEnqModel::where('id', $comfirm_id)->update(['status' => 'Confirm']);
            }
            return redirect('admin/new-student')->with('status',"Insert successfully");
        }
        catch(Exception $e){
            return redirect('insert')->with('failed',"operation failed");
        }
    }

    public function listStudent()
    {
        return view('admin.pages.list_student');
    }
}
