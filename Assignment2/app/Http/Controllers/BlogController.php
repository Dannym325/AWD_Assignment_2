<?php

namespace App\Http\Controllers;

use App\Blog;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

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

    public function create(Request $request)
    {
        $blog = new Blog();

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->username = $request->username;
        $blog->createdAt = date("Y-m-d h:i:s");

        DB::table('blogs')->insert(
          ['title' => $blog->title, 'contents' => $blog->content, 'username' => $blog->username, 'created_at' => $blog->createdAt ]
        );

        return back();  // redirect to the main blogs page?
    }
}
