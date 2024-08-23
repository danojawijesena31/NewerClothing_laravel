<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
        return view('user.login');
    }

    function registration(){
        return view('user.registration');
    } 

    function admindashboard(){
        return view('admin.dashboard');
    }

    function loginPost(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        $credentials= $request->only('email','password');
        if(Auth::attempt($credentials)){ 
            if(Auth::user()->status==1){
                return redirect()->intended(route('admindashboard'));
            }else{
                return redirect()->intended(route('home'));
            }
            
        }else{
            return redirect(route('login'))->with("error","Login details Invalid.");
        }
            
    } 

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password'=>'required'
        ]);

        $data['name']= $request-> name;
        $data['email']= $request-> email; 
        $data['password'] = Hash::make($request->password); 

        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with("error", "Registration fail,Try Again");
        }else{
            return redirect(route('login'))->with("success", "Registration successfully!");
        }

    }
};
