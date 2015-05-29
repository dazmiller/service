<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the currentbrowsers table
*
*/
class Currentbrowsers extends Model
{
    protected $table = 'currentbrowsers';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('month', 'year', 'browser', 'counter');

}

