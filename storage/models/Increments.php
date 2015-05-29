<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the increments table
*
*/
class Increments extends Model
{
    protected $table = 'increments';

    public $timestamps = false;

    protected $fillable = array('low', 'high', 'increment');

}

