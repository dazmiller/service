<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the replies table
*
*/
class Replies extends Model
{
    protected $table = 'replies';

    protected $fillable = array('is_correct');

    public function questions()
    {
        return $this->belongsTo('Questions', 'question_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('Users', 'user_id', 'id');
    }

}

