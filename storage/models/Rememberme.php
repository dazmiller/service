<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the rememberme table
*
*/
class Rememberme extends Model
{
    protected $table = 'rememberme';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('userid', 'hashkey');

}

