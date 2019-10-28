<?php

namespace App;

use App\Tag;
use App\User;
use App\Answer;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    
    public $primaryKey = 'id';

    public $timestamps = true;

    public function user()
    {
        //Single Post Belongs To A User
        return $this->belongsTo(User::class);
    }

  
    public function postAnswers()
    {
        //Return all postAnswers associated with a post
        return $this->hasMany(Answer::class);
    }

    public function addPostAnswer($body, $title)
    {
        //Find The Owner Of PostAnswer 
        $postAnswerUser = User::find(auth()->id());
        $postAnswerUserName = $postAnswerUser['name'];

        Answer::create([
            'body' => $body,
            'title' => $title,
            'post_id' => $this->id,
            'user_id' => auth()->id(),
            'user_name' => $postAnswerUserName
        ]);
    }

    public function scopeFilter($query, $filters)
    {

        if(empty($filters)){
            return $query;
        }

        if ($month = $filters['month']) {

            $query->whereMonth('created_at', Carbon::parse($month)->month);

        }

        if ($year = $filters['year']) {

            $query->whereYear('created_at', $year);

        }

    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at)')
        ->get()
        ->toArray();

    }

    public function tags()
    {
        // Any Post may have many tags 
        // Any tag may be applied to be many post 
        // Give name to connecting table
        return $this->belongsToMany(Tag::class);
    }



}
