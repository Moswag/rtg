<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Admin;
use App\AppConstants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function addAdmin(){
        return view('admin.add_admin');
    }

    public function saveAdmin(Request $request){
        if(User::where('email',$request->email)->exists()){
            return back()->with('error','Admin already exists');
        }
        else{
            $user=new User();
            $user->name=$request->name.' '.$request->surname;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->role=AppConstants::USER_ADMIN;

            if($user->save()){
                $admin=new Admin();
                $admin->name=$request->name;
                $admin->surname=$request->surname;
                $admin->national_id=$request->national_id;
                $admin->email=$request->email;
                $admin->phonenumber=$request->phonenumber;
                $admin->address=$request->address;
                $admin->employee_id=$request->employee_id;

                if($admin->save()){
                    return redirect()->route('view_admins')->with('message','Admin successfully added');
                }
                else{
                    return back()->with('error','Failed to add admin, please contact admin');
                }

            }
        }
    }





    public function viewAdmins(){
        $page='Admin';
        $admins=Admin::where('email','<>','')->get();
        return view('admin.view_admins',compact('admins','page'));
    }


    public function deleteAdmin($id){
        if(Admin::where('id',$id)->delete()){
            return redirect()->route('view_admins')->with('message','Admin successfully deleted');
        }
        else{
            return redirect()->route('view_admins')->with('error','Failed to delete Admin');
        }
    }
}
