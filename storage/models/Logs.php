<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the logs table
*
*/
class Logs extends Model
{
    protected $table = 'logs';

    public $timestamps = false;

    protected $fillable = array('type', 'message', 'action_id', 'user_id', 'ip', 'timestamp');

}

