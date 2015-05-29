<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the filterwords table
*
*/
class Filterwords extends Model
{
    protected $table = 'filterwords';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('word');

}

