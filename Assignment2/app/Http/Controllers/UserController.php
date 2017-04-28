<?php

namespace App\Http\Controllers;

use App\Blog;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
      return view('blogs');
    }

    public function login(Request $request)
    {
      $email = $request->username;
      $password = $request->password;

      $user = DB::table('users')->where('email', $email)->first();

      if (!empty($user)) {
        if($user->password == $password) {
          return Redirect::action('BlogController@index'); // user has provided the correct details
        } else {
          //return view('login')->with('message', 'Login Failed');
          return Redirect::back()->withErrors(['Login Failed. Please try again.']);
        }
      }
    }

}
