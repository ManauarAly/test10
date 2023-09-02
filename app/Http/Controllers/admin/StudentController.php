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
        }catch(Exception $e){
            return redirect('insert')->with('failed',"operation failed");
        }
    }

    public function studentList()
    {
        $stuDatas = StudentModel::all();
        return view('admin.pages.list_student')->with('stuDatas', $stuDatas);
    }

    public function studentProfile($userId)
    {
        $student = StudentModel::find($userId);
        return view('admin.pages.student_profile')->with('student', $student);
    }

    public function admissionPrint($userId)
    {
        $student = StudentModel::find($userId);
        return view('admin.pages.admission_print')->with('student', $student);
<<<<<<< HEAD
    }

    public function studentEdit($userId=null)
    {
        $student = StudentModel::find($userId);
        return view('admin.pages.student_edit')->with('students', $student);
    }

    public function saveStudentEdit(request $request, $userId=null)
    {
        $data = $request->input();
        try{

            if(!empty($request->file) && $request->file != ''){
                $fileName = time() . '.' . $request->file->extension();
                $moveFile = $request->file->move(public_path('assets/images/studentImgs'), $fileName);
                $_data['img']  = $fileName;
            }
            
            $_data['reg']    = $data['ad_reg_no'];
            $_data['admission_date']   = $data['ad_date'];
            $_data['regular']  = $data['ad_regular'];
            $_data['select_branch']  = $data['ad_branch'];
            $_data['name']  = $data['enq_stu_name'];
            $_data['gender']  = $data['enq_gender'];
            $_data['dob']  = $data['enq_dob'];
            $_data['class']  = $data['enq_course'];
            $_data['gardian']  = $data['enq_gua_mobile_no'];
            $_data['father']  = $data['enq_father_name'];
            $_data['city'] = $data['enq_city'];
            $_data['mob'] = $data['enq_mobile_no'];
            $_data['address']  = $data['enq_address'];
            $_data['last_school']  = $data['enq_school_name'];
            $_data['board']  = $data['enq_board'];
            $_data['board']  = $data['enq_board'];
            $_data['date']  = date('Y-m-d');
            $_data['time']  = date('H:i:s');
            $_data['by']  = $data['enq_stu_name'];
            $_data['session']  = $data['ad_session'];
            $_data['fee']  = $data['enq_fee'];
            // 'course_id '  => 10,
            $_data['updated_at']  = date('Y-m-d H:i:s');

            StudentModel::where('id', $userId)->update($_data);

            return redirect('admin/student-edit/'.$userId)->with('status',"Update successfully");

        }catch(Exception $e){
            return redirect('insert')->with('failed',"operation failed");
        }
    }

    public function delStudent(request $request)
    {
        $data = $request->input();
        $delData = StudentModel::where('id', $data['stuId'])->delete();
        if($delData){
            $msg = "Successfully deleted student";
            $type = 1;
            $status = 200;
        }else{
            $msg = "There are some issue, please try some time";
            $type = 0;
            $status = 400;
        }
        return response()->json(array('type'=>$type, 'msg'=>$msg), $status);
=======
>>>>>>> d4781c1 (worked on student section)
    }
}
