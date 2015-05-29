<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the topics table
*
*/
class Topics extends Model
{
    protected $table = 'topics';

    protected $fillable = array('name', 'title', 'description');

    public function questions()
    {
        return $this->hasMany('Questions', 'id', 'topic_id');
    }

}

