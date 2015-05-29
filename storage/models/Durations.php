<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the durations table
*
*/
class Durations extends Model
{
    protected $table = 'durations';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('days', 'description');

}

