<?php

namespace App\Http\Controllers\Manager;

use App\Branch;
use App\Employee;
use App\Manager;
use App\TravelRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function dashboard(){
        return view('manager.dashboard');
    }



    public function changePassword(){
        return view('manager.change_password');
    }


    public function viewEmployees(){
        $manager= Manager::where('email',auth()->user()->email)->first();
        $branch=Branch::where('name',$manager->branch)->first();
        $page="Employees";
        $employees=Employee::where('branch',$manager->branch)->get();
        return view('manager.view_employees',compact('employees','page'));
    }


    public function viewEmpsComing(){
        $page='Traveller';
        $manager=Manager::where('email',auth()->user()->email)->first();
        $employees=TravelRequest::where('to',$manager->branch)->get();
        return view('manager.request_to_my_hotel',compact('employees','page'));
    }



}
