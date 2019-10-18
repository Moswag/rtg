<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use App\Distance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistanceController extends Controller
{
    public  function addDistance(){
        $branches=Branch::all();
        return view('admin.add_distance',compact('branches'));
    }



    public function saveDistance(Request $request){
        if(Distance::where([['to',$request->to],['from',$request->from]])->exists()){
            return back()->with('error','Distance already exists');
        }
        else{
            if($request->to==$request->from){
                return back()->with('error','You can not add distance for the same branch');
            }
            else{
                $distance=new Distance();
                $distance->to=$request->to;
                $distance->from=$request->from;
                $distance->km=$request->km;

                if($distance->save()){
                    return redirect()->route('view_distance')->with('message','Distance successfully added');
                }
                else{
                    return back()->with('error','Failed to add distance, please contact admin');
                }

            }
        }
    }


    public function viewDistances(){
        $distances=Distance::all();
        $page='Distance';
        return view('admin.view_distance',compact('distances','page'));
    }


    public function deleteDistance($id){
        if(Distance::find($id)->delete()){
            return redirect()->route('view_distance')->with('message','Distance successfully deleted');
        }
        else{
            return back()->with('error','Failed to delete distance, please contact admin');
        }
    }
}
