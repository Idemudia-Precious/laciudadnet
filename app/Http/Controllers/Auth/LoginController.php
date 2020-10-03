<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use\Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function login(Request $request)
    {
        //return $request->email . " <br>" .  $request->password ;
        //$request->session()->put('data',$request->input());
        //$request->session()->get('data');

        $email = $request->input('email');
        $password = $request->input('password');
        //return $email . " " . $password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            Auth::logout();
            if (Auth::attempt(['email' => $email, 'password' => $password, 'verified' => '1'])) {
                return "Logged In" . "<script>window.location.replace('/profile')</script>" ;
            } else {
                return back()->withErrors([
                    'message' => 'Account not verified'
                ]);
            }
        } else {
            return back()->withErrors([
                'message' => 'The Email or Password is incorrect'
            ]);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
        //return '<script>window.history.back(); window.location.replace(); </script>';
    }
}
