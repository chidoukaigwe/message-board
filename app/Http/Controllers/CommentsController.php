<?php

namespace App\Http\Controllers;

use App\Post;
use App\Answer;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Answer $postAnswer, $id)
    {
        
        $post = Post::find($id);

        $postAnswer = Answer::find($id);

        $postAnswerId = $postAnswer['id'];

        
        $this->validate(request(), ['body' => 'required|min:15']);

        $postAnswer->addComment(request('body'), $postAnswerId);

        //Laravel Helper Function
        return back();

    }
}
