<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        return view('index')->with('title', "Home");
    }

    public function signup(){
        return view('pages.signup')->with('title', "Sign Up");
    }

    public function business_account(){
        return view('pages.business')->with('title', "Business Account Sign Up");
    }

    public function personal_account(){
        return view('pages.personal')->with('title', "Personal Account Sign Up");
    }

    public function request_verify(){
        return view('auth.verify')->with('title', "Verify Email");
    }

    public function verify(){
        return view('auth.verify')->with('title', "Verify Email");
    }

    public function login(){
        return view('auth.login')->with('title', "Login");
    }

    public function editprofile(){
        return view('pages.edit-personal-profile')->with('title', "Edit profile");
    }

}

