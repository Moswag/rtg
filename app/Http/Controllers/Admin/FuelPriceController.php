<?php

namespace App\Http\Controllers\Admin;

use App\FuelPrice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FuelPriceController extends Controller
{
    public function addFuelPrice(){
        return view('admin.add_fuel_price');
    }


    public function saveFuelPrice(Request $request){
        if(FuelPrice::where('type',$request->type)->exists()){
            return back()->with('error','Fuel price already exists');
        }
        else{
            $fuel=new FuelPrice();
            $fuel->type=$request->type;
            $fuel->price=$request->price;
            if($fuel->save()){
                return redirect()->route('view_fuel_prices')->with('message','Fuel price successfully added');
            }
            else{
                return back()->with('error','Failed to add fuel price, please contact admin');
            }

        }
    }


    public function viewFuelPrices(){
        $fuels=FuelPrice::all();
        $page='Fuel Price';
        return view('admin.view_fuel',compact('fuels','page'));
    }

    public function deleteFuelPrice($id){
        if(FuelPrice::find($id)->delete()){
            return redirect()->route('view_fuel_prices')->with('message','Fuel price successfully deleted');
        }
        else{
            return back()->with('error','Failed to delete fuel price');
        }
    }
}
