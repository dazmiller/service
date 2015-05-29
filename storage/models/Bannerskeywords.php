<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the bannerskeywords table
*
*/
class Bannerskeywords extends Model
{
    protected $table = 'bannerskeywords';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('banner', 'keyword');

}

