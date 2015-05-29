<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the bannersusers table
*
*/
class Bannersusers extends Model
{
    protected $table = 'bannersusers';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'name', 'company', 'email');

}

