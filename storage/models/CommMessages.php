<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the comm_messages table
*
*/
class CommMessages extends Model
{
    protected $table = 'comm_messages';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'boardid', 'msgdate', 'user', 'username', 'message');

}

