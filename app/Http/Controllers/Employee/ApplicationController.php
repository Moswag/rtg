<?php

namespace App\Http\Controllers\Employee;

use App\Branch;
use App\Distance;
use App\Employee;
use App\FuelPrice;
use App\RequestType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TravelRequest;

class ApplicationController extends Controller
{
    public function addApplication()
    {
        $me = Employee::where('email', auth()->user()->email)->first();
        $branches = Branch::where('name', '<>', $me->branch)->get();
        $purposes = RequestType::all();
        return view('employee.add_application', compact('branches', 'purposes'));
    }


    public function saveApplication(Request $request)
    {
        $employee = Employee::where('email', auth()->user()->email)->first();
        if ($request->to == 'branch') {
            if ($request->branch == '') {
                return back()->with('error', 'Please pick the branch to proceed, you can not choose branch without specifying it');
            }
            else {
                if ($request->transport == 'Road') {
                    if (Distance::where([['to', $request->branch], ['from', $employee->branch]])->exists() ||
                         Distance::where([['from', $request->branch], ['to', $employee->branch]])->exists()
                    ) {
                        if (Distance::where([['to', $request->branch], ['from', $employee->branch]])->exists()) {
                            $distance = Distance::where([['to', $request->branch], ['from', $employee->branch]])->first();
                        } else {
                            $distance = Distance::where([['from', $request->branch], ['to', $employee->branch]])->first();
                        }

                        $myDis = $distance->km / 3;
                        $fuel = FuelPrice::where('id','<>','')->first();

                        $allowance = $myDis * $fuel->price;
                        $travel = new TravelRequest();

                        $travel->to = $request->branch;
                        $travel->is_to_branch = 'yes';
                        $travel->employee_id = $employee->id;
                        $travel->name = auth()->user()->name;
                        $travel->from = $employee->branch;
                        $travel->date = $request->date;
                        $travel->days = $request->days;
                        $travel->status = 'Pending';
                        $travel->date = $request->date;
                        $travel->mode_of_transport = $request->transport;
                        $travel->type_of_travel = $request->type_of_travel;
                        $travel->number_of_travellers = $request->number_of_travellers;
                        $travel->purpose_of_travel = $request->purpose_of_travel;
                        $travel->reason = $request->reason;
                        $travel->allowance = $allowance * $request->number_of_travellers;
                        $travel->is_calculatable='true';


                        if ($travel->save()) {
                            return redirect()->route('view_applications')->with('message', 'Application successfully added');
                        } else {
                            return back()->with('error', 'Application successfully added');
                        }
                    }
                    else{
                        $travel = new TravelRequest();

                        $travel->to = $request->branch;
                        $travel->is_to_branch = 'yes';
                        $travel->employee_id = $employee->id;
                        $travel->name = auth()->user()->name;
                        $travel->from = $employee->branch;
                        $travel->date = $request->date;
                        $travel->days = $request->days;
                        $travel->status = 'Pending';
                        $travel->date = $request->date;
                        $travel->mode_of_transport = $request->transport;
                        $travel->type_of_travel = $request->type_of_travel;
                        $travel->number_of_travellers = $request->number_of_travellers;
                        $travel->purpose_of_travel = $request->purpose_of_travel;
                        $travel->reason = $request->reason;


                        if ($travel->save()) {
                            return redirect()->route('view_applications')->with('message', 'Application successfully added');
                        } else {
                            return back()->with('error', 'Application successfully added');
                        }
                    }

                } else {
                    $travel = new TravelRequest();

                    $travel->to = $request->branch;
                    $travel->is_to_branch = 'yes';
                    $travel->employee_id = $employee->id;
                    $travel->name = auth()->user()->name;
                    $travel->from = $employee->branch;
                    $travel->date = $request->date;
                    $travel->days = $request->days;
                    $travel->status = 'Pending';
                    $travel->date = $request->date;
                    $travel->mode_of_transport = $request->transport;
                    $travel->type_of_travel = $request->type_of_travel;
                    $travel->number_of_travellers = $request->number_of_travellers;
                    $travel->purpose_of_travel = $request->purpose_of_travel;
                    $travel->reason = $request->reason;


                    if ($travel->save()) {
                        return redirect()->route('view_applications')->with('message', 'Application successfully added');
                    } else {
                        return back()->with('error', 'Application successfully added');
                    }
                }
            }


        } else {
            if ($request->other != '') {

                $travel = new TravelRequest();

                $travel->to = $request->other;
                $travel->is_to_branch = 'no';
                $travel->employee_id = $employee->id;
                $travel->name = auth()->user()->name;
                $travel->from = $employee->branch;
                $travel->date = $request->date;
                $travel->days = $request->days;
                $travel->status = 'Pending';
                $travel->date = $request->date;
                $travel->mode_of_transport = $request->transport;
                $travel->type_of_travel = $request->type_of_travel;
                $travel->number_of_travellers = $request->number_of_travellers;
                $travel->purpose_of_travel = $request->purpose_of_travel;
                $travel->reason = $request->reason;


                if ($travel->save()) {
                    return redirect()->route('view_applications')->with('message', 'Application successfully added');
                } else {
                    return back()->with('error', 'Application successfully added');
                }
            } else {
                return back()->with('error', 'Please enter the other field, you can not choose other without specifying it');
            }
        }


    }


    public function viewApplications()
    {
        $employee = Employee::where('email', auth()->user()->email)->first();
        $page = 'Application';
        $applications = TravelRequest::where('employee_id', $employee->id)->get();
        return view('employee.view_my_applications', compact('applications', 'page'));
    }


    public function viewApplication($id){
        $application=TravelRequest::find($id);
        return view('employee.view_app',compact('application'));
    }
}
