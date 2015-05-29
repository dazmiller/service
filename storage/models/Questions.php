<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the questions table
*
*/
class Questions extends Model
{
    protected $table = 'questions';

    protected $fillable = array('description');

    public function topics()
    {
        return $this->belongsTo('Topics', 'topic_id', 'id');
    }

    public function answers()
    {
        return $this->hasMany('Answers', 'id', 'question_id');
    }

    public function replies()
    {
        return $this->hasMany('Replies', 'id', 'question_id');
    }

}

