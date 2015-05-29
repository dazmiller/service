<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the membertypes table
*
*/
class Membertypes extends Model
{
    protected $table = 'membertypes';

    public $timestamps = false;

    protected $fillable = array('feedbacks', 'icon');

}

