<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    public function addBranch(){
        $page='Add Branch';
        return view('admin.add_branch',compact('page'));
    }


    public function saveBranch(Request $request){
        if(Branch::where('name')->exists()){

        }
        else{
            $branch=new Branch();
            $branch->name=$request->name;
            $branch->city=$request->city;
            $branch->status='Active';

            if($branch->save()){
                return redirect()->route('view_branches')->with('message','Branch successfully added');
            }
            else{
                return back()->with('error','Failed to add branch');
            }
        }
    }

    public function viewBranches(){
        $branches=Branch::all();
        $page='Branch';
        return view('admin.view_branches', compact('branches','page'));
    }
}
