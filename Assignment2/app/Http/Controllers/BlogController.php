<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blogs')->get();

        return view('blogs.index', compact('blogs'));
    }
}
