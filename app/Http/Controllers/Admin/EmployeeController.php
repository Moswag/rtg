<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\AppConstants;
use App\Branch;
use App\Employee;
use App\User;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function addEmployee(){
        $branches=Branch::all();
        return view('admin.add_employee', compact('branches'));
    }

    public function saveEmployee(Request $request){
        if(User::where('email',$request->email)->exists()){
            return back()->with('error','Admin already exists');
        }
        else{
            $user=new User();
            $user->name=$request->name.' '.$request->surname;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->role=AppConstants::USER_EMPLOYEE;

            if($user->save()){
                $admin=new Employee();
                $admin->name=$request->name;
                $admin->surname=$request->surname;
                $admin->national_id=$request->national_id;
                $admin->email=$request->email;
                $admin->phonenumber=$request->phonenumber;
                $admin->address=$request->address;
                $admin->employee_id=$request->employee_id;
                $admin->branch=$request->branch;

                if($admin->save()){
                    return redirect()->route('view_employees')->with('message','Employee successfully added');
                }
                else{
                    return back()->with('error','Failed to add employee, please contact admin');
                }

            }
        }
    }


    public function viewEmployees(){
        $employees=Employee::all();
        $page='Employee';
        return view('admin.view_employees',compact('employees','page'));
    }


    public function deleteEmployee($id){
        if(Employee::where('id',$id)->delete()){
            return redirect()->route('view_employees')->with('message','Employee successfully added');
        }
        else{
            return back()->with('error','Failed to delete employee, please contact admin');
        }
    }
}
