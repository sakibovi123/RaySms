<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function loginIndex(){
        return view('Dashboard.Auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            "name" => "required",
            "password" => "required"
        ]);
        if( Auth::attempt($request->only("name", "password")) ){
            return redirect("/")->with("message", "Logged In!!");
        }
        else{
            return redirect("/login")->with("message", "Login details is wrong");
        }

    }

    public function register()
    {
        return view("Dashboard.Auth.register");
    }

    public function createUser(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required|min:6"
        ]);


        $user = new User();
        $user->name = $request->get("name");
        $user->email = $request->get("email");
        $user->password = Hash::make($request->get("password"));

        $user->save();

        if( Auth::attempt($request->only("email", "password", "name")) ){
            return redirect("/");
        }
        else{
            return redirect()->with("message", "Wrong details provided!");
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect("/login");
    }
}
