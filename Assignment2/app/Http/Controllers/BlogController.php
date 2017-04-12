<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
      Returns all the tuples in the blogs table.
    */
    public function index()
    {
        $blogs = DB::table('blogs')->get();

        return view('blogs.index', compact('blogs'));
    }

    public function delete($id)
    {
        DB::table('blogs')->where('id', '=', $id)->delete();
        // refresh the index page so the table updates
        return back();
    }
}
