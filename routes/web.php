<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('index');
});


*/

Route::get('/', 'PagesController@index');

Route::get('/signup', 'PagesController@signup');

Route::get('/business_account', 'PagesController@business_account');

Route::get('/personal_account', 'PagesController@personal_account');

//Route::get('/student/{uid}', 'PagesController@live');

Route::get('/profile', 'HomeController@index')->name('profile');

Route::get('/profile/{username}', 'HomeController@index_other');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/login', 'Auth\LoginController@login');

Route::get('/verify_email', 'PagesController@request_verify');

Route::get('/verify_email/{email}', 'PagesController@verify');

Route::get('/login', 'PagesController@login');

Route::get('/account-settings', function () {
    return view('pages.account_settings')->with('title', "Account Settings");
});

Route::get('/gallery', function () {
    return view('pages.gallery')->with('title', "Gallery");
});

Route::get('/register', 'RegisterController@login');

Route::get('/edit-personal-profile', 'PagesController@editprofile');


//Auth::routes();
