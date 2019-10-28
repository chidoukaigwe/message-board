<?php

namespace App;

use App\Post;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $fillable = ['title', 'body', 'post_id', 'user_id', 'user_name'];

    protected $table = 'post_answers';
    
    public $primaryKey = 'id';

    public $timestamps = true;

    public function post()
    {
        //Relationship is a Post Answer for every post 
        return $this->belongsTo(Post::class);
    }

    public function comments()
    {
        //Return all comments associated with a postAnswer
        return $this->hasMany(Comment::class);
    }

    public function addComment($body, $id = null)
    {
        //Find The Owner Of Comment 
        $postAnswerCommentUser = User::find(auth()->id());
        $postAnswerCommentUserName = $postAnswerCommentUser['name'];
        
        Comment::create([
            'body' => $body,
            'answer_id' => $id,
            'user_id' => auth()->id(),
            'user_name' => $postAnswerCommentUserName
        ]);
    }

}
