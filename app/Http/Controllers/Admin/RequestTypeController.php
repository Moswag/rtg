<?php

namespace App\Http\Controllers\Admin;

use App\TravelType;
use App\RequestType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestTypeController extends Controller
{
    public function addTravelAgency(){
        $page='Travel Agency';
        return view('admin.add_agency');
    }

    public function saveTravelAgency(Request $request){
        $agency=new RequestType();
        $agency->type=$request->type;
        $agency->agency=$request->agency;
        $agency->status='Active';

        if($agency->save()){
            return redirect()->route('view_agencies')->with('message','Agency successfully added');
        }
        else{
            return back()->with('error','Failed to add agency');
        }
    }


    public function viewTravelAgencies(){
        $agencies=RequestType::all();
        $page='Agency';
        return view('admin.view_agencies',compact('agencies','page'));

    }


    public function deleteTravelAgency($id){
        if(TravelType::find($id)->delete()){
            return redirect()->route('view_agencies')->with('message','Agency successfully deleted');
        }
        else{
            return back()->with('error','Failed to delete agency');
        }
    }
}
