<?php

namespace App\Http\Controllers\Manager;

use App\Branch;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Manager;
use App\RequestType;
use App\TravelRequest;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function viewApplications(){
        $manager= Manager::where('email',auth()->user()->email)->first();
        $page='Application';
        $applications=TravelRequest::where([['from',$manager->branch],['status','Pending']])->get();
        return view('manager.view_travel_requests',compact('applications','page'));
    }

    public function rejectedApplications(){
        $manager= Manager::where('email',auth()->user()->email)->first();
        $page='Application';
        $applications=TravelRequest::where([['from',$manager->branch],['status','Rejected']])->get();
        return view('manager.rejected_applications',compact('applications','page'));
    }

    public function approvedApplications(){
        $manager= Manager::where('email',auth()->user()->email)->first();
        $page='Application';
        $applications=TravelRequest::where([['from',$manager->branch],['status','Approved']])->get();
        return view('manager.view_approved_applications',compact('applications','page'));
    }


    public function viewApplication($id){
        $application=TravelRequest::find($id);
        return view('manager.view_application',compact('application'));
    }

    public function rejectApplication($id){
        $application=TravelRequest::find($id);
        return view('manager.reject_application',compact('application'));
    }


    public function rejectEmpApplication(Request $request){
        $updApp=TravelRequest::where('id',$request->id)->update([
            'reject_reason'=>$request->reject_reason,
            'status'=>'Rejected'
        ]);

        if($updApp){
            return redirect()->route('view_bracnch_applications')->with('message','Application successfully rejected');
        }
        else{
            return back()->with('error','Failed to update application');
        }
    }


    public function updateApplicationStatus(Request $request){
        $app=TravelRequest::find($request->id);
        if($app->is_calculatable=='true'){
            $upd=TravelRequest::where('id',$request->id)->update([
                'status'=>'Approved'
            ]);
            if($upd){
                return redirect()->route('view_bracnch_applications')->with('message','Application successfully approved');
            }
            else{
                return back()->with('error','Failed to update application');
            }
        }
        else{
            $upd=TravelRequest::where('id',$request->id)->update([
                'status'=>'Approved',
                'allowance'=>$request->allowance
            ]);
            if($upd){
                return redirect()->route('view_bracnch_applications')->with('message','Application successfully approved');
            }
            else{
                return back()->with('error','Failed to update application');
            }
        }

    }
}
