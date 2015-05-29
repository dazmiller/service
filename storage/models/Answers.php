<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the answers table
*
*/
class Answers extends Model
{
    protected $table = 'answers';

    protected $fillable = array('description', 'is_correct');

    public function questions()
    {
        return $this->belongsTo('Questions', 'question_id', 'id');
    }

}

