<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentModel;
use App\Models\StuEnqModel;
use App\Models\FeesMangModel;

class StudentController extends Controller
{
    public function newStudent()
    {
        if(isset($_GET['id'])){
            $students = StuEnqModel::find($_GET['id']);
        }else{
            $students = '';
        }

        $reg_no = StudentModel::latest()->first()->id+1;

        $data['students'] = $students;
        $data['reg_no'] = $reg_no;
        
        return view('admin.students.new_student')->with('data', $data);
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

            $stuAdSavedId = $stuAdData->id;

            if(isset($_GET['id']) && $_GET['id'] != '' && $stuAdSavedId){
                $comfirm_id = $_GET['id'];
                StuEnqModel::where('id', $comfirm_id)->update(['status' => 'Confirm']);
            }

            if($stuAdSavedId){
                // fees update
                $stu_fee_data = new FeesMangModel();
                $stu_fee_data->reg = $data['ad_reg_no'];
                $stu_fee_data->fee = $data['enq_fee'];
                $stu_fee_data->updated_at = date('Y-m-d H:i:s');
                $stu_fee_data->created_at = date('Y-m-d H:i:s');
                $stu_fee_data->save();

                return redirect('admin/new-student')->with('status',"Insert successfully");
            }else{
                return redirect('admin/new-student')->with('failed',"There are someting error, please try some time.");
            }
        }catch(Exception $e){
            return redirect('admin/new-student')->with('failed',"operation failed");
        }
        
    }

    public function studentList()
    {
        $stuDatas = StudentModel::orderBy('id', 'DESC')->get();
        return view('admin.students.list_student')->with('stuDatas', $stuDatas);
    }

    public function studentProfile($id)
    {
        $student = StudentModel::find($id);
        return view('admin.students.student_profile')->with('student', $student);
    }

    public function studentDay()
    {
        $sevendaysafter = date('Y-m-d', strtotime('+7 days') );
        $sevendaysbefore = date('Y-m-d', strtotime('-7 days') );
        $stubdayDatas = StudentModel::whereBetween('dob', [$sevendaysbefore, $sevendaysafter])->get();
        return view('admin.students.student_bday')->with('stubdayDatas', $stubdayDatas);
    }
}
