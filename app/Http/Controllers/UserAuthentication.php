<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserAuthentication extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function create(Request $request){
        $request->validate([
             'name'=>'required',
              'email'=>'required|email|unique:users',
              'password'=>'required|min:5|max:12'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $query = $user->save();

        if($query){
            return back()->with('sucess','you have been sucessfully registered');
        }else{
            return back()->with('fail','something went wrong');
        }
    }

    function check(Request $request){
        $request->validate([
           'email'=>'required|email',
           'password'=>'required|min:5|max:12'
        ]);

        $user = User::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                 $request->session()->put('LoggedUser', $user->id);
                 return redirect('profile');
            }else{
                return back()->with('fail', 'invalid password');
            }
        }else{
            return back()->with('fail','No account found for this email');
        }
    }
   function profile(){
       return view('admin.profile');
   }

   function logout(){
       if(session()->has('LoggedUser')){
           session()->pull('LoggedUser');
           return redirect('login');
       }
   }

}
