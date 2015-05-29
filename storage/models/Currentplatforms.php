<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the currentplatforms table
*
*/
class Currentplatforms extends Model
{
    protected $table = 'currentplatforms';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('month', 'year', 'platform', 'counter');

}

