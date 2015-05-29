<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the proxybid table
*
*/
class Proxybid extends Model
{
    protected $table = 'proxybid';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('itemid', 'userid', 'bid');

}

