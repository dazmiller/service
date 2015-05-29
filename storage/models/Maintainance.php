<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the maintainance table
*
*/
class Maintainance extends Model
{
    protected $table = 'maintainance';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'active', 'superuser', 'maintainancetext');

}

