<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.profile.index')->with('title', Auth::user()->username);
    }

    public function index_other($username)
    {
        $user = DB::select('select * from users where username = ?', [$username]);
        //return $user;
        return view('pages.profile.others', ['title' => $username,'users' => $user]);
    }
}
