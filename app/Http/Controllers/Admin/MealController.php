<?php

namespace App\Http\Controllers\Admin;

use App\AverageLunch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function addMealPrice(){
        $page='Meal Price Per Day';
        return view('admin.add_average_lunch',compact('page'));
    }


    public function saveMealPrice(Request $request){
        if(AverageLunch::where('id','<>','')->count()>0){
            return back()->with('error','Please note that meal per day can only exist once');
        }
        else{
            $lunch=new AverageLunch();
            $lunch->number=$request->price;
            if($lunch->save()){
                return redirect()->route('view_average_lunch')->with('message','Meal Price Per Day successfully added');
            }
            else{
                return back()->with('error','Failed to add meal price per day, please contact admin');
            }
        }

    }

    public function viewMealPrice(){
        $lunches=AverageLunch::all();
        $page='Numbers of Meals Per Day';
        return view('admin.view_average_lunch',compact('lunches','page'));
    }

    public function deleteMealPrice($id){
        if(AverageLunch::find($id)->delete()){
            return back()->with('message','Meal successfully deleted');
        }
        else{
            return back()->with('error','Meal successfully deleted');
        }
    }
}
