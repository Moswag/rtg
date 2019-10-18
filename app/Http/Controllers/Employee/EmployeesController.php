<?php

namespace App\Http\Controllers\Employee;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Manager;

class EmployeesController extends Controller
{
    public function viewMyManager(){
        $page="Manager";
        $me=Employee::where('email',auth()->user()->email)->first();
        $managers=Manager::where('branch',$me->branch)->get();
        return view('employee.view_my_manager',compact('managers','page'));
    }
}
