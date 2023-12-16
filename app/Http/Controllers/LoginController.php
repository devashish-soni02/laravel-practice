<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function handlelogin(Request $request)
    {

        // For Test Response
        // echo $_POST["name"];
        // echo $_POST["email"];
        // echo $_POST["password"];
        // dd($request->all());



        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required"
        ]);

        return $request;
    }
}
