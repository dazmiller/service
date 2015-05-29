<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the messages table
*
*/
class Messages extends Model
{
    protected $table = 'messages';

    public $timestamps = false;

    protected $fillable = array('sentto', 'sentfrom', 'fromemail', 'sentat', 'message', 'isread', 'subject', 'replied',
        'reply_of', 'question', 'public');

}

