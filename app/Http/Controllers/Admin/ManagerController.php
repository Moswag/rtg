<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Manager;
use App\AppConstants;
use App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function addManager(){
        $page='Manager';
        $branches=Branch::all();
        return view('admin.add_manager',compact('page','branches'));
    }


    public function saveManager(Request $request){
        if(User::where('email',$request->email)->exists()){
            return back()->with('error','Admin already exists');
        }
        else{
            $user=new User();
            $user->name=$request->name.' '.$request->surname;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->role=AppConstants::USER_MANAGER;

            if($user->save()){
                $admin=new Manager();
                $admin->name=$request->name;
                $admin->surname=$request->surname;
                $admin->national_id=$request->national_id;
                $admin->email=$request->email;
                $admin->phonenumber=$request->phonenumber;
                $admin->address=$request->address;
                $admin->employee_id=$request->employee_id;
                $admin->branch=$request->branch;

                if($admin->save()){
                    return redirect()->route('view_managers')->with('message','Manager successfully added');
                }
                else{
                    return back()->with('error','Failed to add manager, please contact admin');
                }

            }
        }
    }



    public function viewManagers(){
        $page="Manager";
        $managers=Manager::all();
        return view('admin.view_managers', compact('page','managers'));
    }

    public function deleteManager($id){
        $manager=Manager::find($id);
            if(User::where('id',$id)->delete()){
                if(Manager::find($id)->delete()){
                    return redirect()->route('view_managers')->with('message','Manager successfully deleted');
                }
                else{
                    return redirect()->route('view_managers')->with('error','Failed to delete manager');
                }
            }
    }
}
