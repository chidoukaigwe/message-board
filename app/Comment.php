<?php

namespace App;

use App\Answer;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['body', 'answer_id', 'user_id', 'user_name'];
    
    public function postAnswer()
    {
        //Relationship is a comment for every post answer 
        return $this->belongsTo(Answer::class);
    }

}
