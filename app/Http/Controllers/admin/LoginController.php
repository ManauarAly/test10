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

            if($dbData){
                
                if($dbData->typ == 'admin'){
                   
                    if($dbData->status == 'active'){

                        Session::put('type', 'admin');
                        Session::put('adminId',$dbData->id);        
                        return redirect('admin/dashboard');
                    
                    }else{
                        return redirect()->back()
                        ->with('error','You are block by admin.');
                    }


                }elseif($dbData->typ == 'branch'){

                    if($dbData->status == 'active'){
                        
                        Session::put('type', 'branch');
                        Session::put('branchId', $dbData->id);
                        return redirect('branch/dashboard');

                    }else{
                        return redirect()->back()
                        ->with('error','You are block by admin.');
                    }
                }else{
                    return redirect()->back()
                    ->with('error','You have not access');
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
