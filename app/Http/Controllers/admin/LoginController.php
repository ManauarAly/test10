<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminModel;
use Validator;
use Hash;
use Session;

class LoginController extends Controller
{
    public function adminLogin()
    {
        return view('admin.pages.login');
    }

    public function adminLoginPost(Request $request) 
    {
        $validate = $request->validate([
                        'username' => 'required|min:3',
                        'password' => 'required|min:8',
                    ]);

        if($validate == true){
            $dbData = AdminModel::whereusername($request->username)
                ->wherepswd(md5($request->password))
                ->first();

                // dd($dbData);
            if($dbData){
                
                if($dbData->typ == 'Administrator'){
                   
                    if($dbData->status == 'active'){

                        Session::put('adminId',$dbData->id);
                        //Session::put('userName',$dbData->username);
                        
                        // $clientIP = request()->ip();
                        // $last_login = Carbon::now();
                        // $dbData->update(['last_login'=>$last_login, 'last_ip'=>$clientIP ]); // update last login here        
                         return redirect('admin/dashboard');
                        //echo"LOGIN DONE";
                        // die;
                    }else{
                        return redirect()->back()
                        ->with('error','You are block by admin.');
                    }


                }else{
                    return redirect()->back()
                    ->with('error','Only admin login');
                }
                
            }else{
                return redirect()->back()->with('error','Oops! You have entered invalid credentials');
            }
        }
           
    }

    public function adminLogout()
    {
        Session::flush();
        return redirect()->route('adminLogin')->with('success','logout successfully');
    }
}
