<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostAnswersController extends Controller
{
    
    public function store(Post $post)
    {
        
        $this->validate(request(), [
            'body' => 'required|min:15',
            'title' => 'required|min:5'
            ]);

        $post->addPostAnswer(request('body'), request('title'));

        //Laravel Helper Function
        return back();

    }


}
