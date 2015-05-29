<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the community table
*
*/
class Community extends Model
{
    protected $table = 'community';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'name', 'messages', 'lastmessage', 'msgstoshow', 'active');

}

