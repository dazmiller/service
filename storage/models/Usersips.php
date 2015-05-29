<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the usersips table
*
*/
class Usersips extends Model
{
    protected $table = 'usersips';

    public $timestamps = false;

    protected $fillable = array('user', 'ip', 'type', 'action');

}

