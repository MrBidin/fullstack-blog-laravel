<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view("register.index", [
            "title" => "register",
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            "name" => ["required", "min:5", "max:100"],
            "nameid" => ["required", "min:5", "max:100", "unique:users"],
            "email" => ["required", "email", "unique:users"],
            "password" => ["required", "min:5", "max:100"]
        ]);

        $data["password"] = bcrypt($data["password"]);
        User::create($data);

        return redirect("/login")->with("success", "registration success!"); 
    }
}
