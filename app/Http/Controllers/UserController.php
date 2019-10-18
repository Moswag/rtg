<?php

namespace App\Http\Controllers;

use App\AppConstants;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('session.login');
    }


    public function authenticate(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

            if(auth()->user()->role==AppConstants::USER_ADMIN){
                return redirect()->route('view_admins')->with('message','Welcome '.auth()->user()->name);
            }
            if(auth()->user()->role==AppConstants::USER_EMPLOYEE){
                return redirect()->route('my_manager')->with('message','Welcome '.auth()->user()->name);
            }
            if(auth()->user()->role==AppConstants::USER_MANAGER){
                return redirect()->route('manager_dashboard')->with('message','Welcome '.auth()->user()->name);
            }

        }
        else{

            return redirect()->route('login')->with('error','Wrong credentials, please try again');

        }
    }


    public function changePassword(){
        return view('change_password');
    }


    public function updatePassword(Request $request){
        $updPass=User::where('id',auth()->user()->id)->update([
            'password'=>bcrypt($request->password)
        ]);

        if($updPass){
            return back()->with('message','Password successfully changed');
        }
        else{
            return back()->with('error','Failed to update Password, please contact admin');
        }
    }


    public function logout(){
        auth()->logout();
        session()->flush();

            return redirect()->route('login')->with('message','User successfully logged out');

    }
}
