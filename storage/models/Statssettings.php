<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the statssettings table
*
*/
class Statssettings extends Model
{
    protected $table = 'statssettings';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('activate', 'accesses', 'browsers', 'domains');

}

