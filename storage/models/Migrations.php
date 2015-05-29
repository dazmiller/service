<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the migrations table
*
*/
class Migrations extends Model
{
    protected $table = 'migrations';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('migration', 'batch');

}

