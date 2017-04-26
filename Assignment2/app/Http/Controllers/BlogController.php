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
        //$blogs = Blog::all();

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
        $blog->categoryID = $request->filerSelect; // gets the id out of the select

        DB::table('blogs')->insert(
          ['title' => $blog->title, 'contents' => $blog->content, 'username' => $blog->username, 'created_at' => $blog->createdAt, 'categoryID' => $blog->categoryID ]
        );

        return back();  // redirect to the main blogs page?
    }

    public function update(Request $request, $id)
    {
      $newTitle = $request->title;
      $newContent = $request->contents;

      DB::table('blogs') // update the title
                  ->where('id', $id)
                  ->update(array('title' => $newTitle));

      DB::table('blogs') // update the content
                    ->where('id', $id)
                    ->update(array('contents' => $newContent));

      return back();
    }

    public function edit($id)
    {
      $blog = DB::table('blogs')->where('id', $id)->first(); // missing attributes when you dont use a query?

      return view('blogs.update', compact('blog'));
    }

    public function show($id)
    {
      $blog = DB::table('blogs')->where('id', $id)->first(); // missing attributes when you dont use a query?
      //$myBlog = Blog::find($blog);
      //return $myBlog;
      return view('blogs.view', compact('blog'));
    }

    /**
    Method to pull all blogs of a certain category
    */
    public function filter(Request $request)
    {
      $catID = $request->input('filterSelect');

      if($catID == 0) { // if 0 is passed, it will be all
        return BlogController::index();
      } else {
        $blogs = DB::table('blogs')->where('categoryID', '=', $catID)->get();

        return view('blogs.index', compact('blogs'));
      }

    }

}
