<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //We are using eloquent the object relational mapper
        $post = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('pages.index')->with('posts', $post);
    }


    public function globalAuthPage()
    {
        
        return view('pages.global-auth-page');
    }

    public function archives()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('pages.archives', compact('posts'));
    }
}
