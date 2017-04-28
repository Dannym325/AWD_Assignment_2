<?php

namespace App\Http\Controllers;

use App\Blog;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
      return view('blogs');
    }

    public function login()
    {
      return null;
    }

    public function login(Request $request)
    {
      $email = $request->username;
      $password = $request->password;

      $user = DB::table('users')
                ->select(DB::raw('id, first_name, last_name, email, COUNT(*) AS user_count'))
                ->where([['email', '=', $email)],['password', '=', $password]])
                ->get();

      return $user;
    }

}
