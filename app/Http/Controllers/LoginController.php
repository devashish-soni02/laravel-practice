<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function handlelogin(LoginRequest $request)
    {

        // For Test Response
        // echo $_POST["name"];
        // echo $_POST["email"];
        // echo $_POST["password"];
        // dd($request->all());



    //     $request->validate(,
    //     [
    //         "name.required"=> "Please Enter Your User Name!",
    //         "email.required"=> "Email Not Valid Please Enter Your Valid Email",
    //         "password.required"=> "Please Enter Your Password",

    //     ]
    // );

        return $request;
    }
}
