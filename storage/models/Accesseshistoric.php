<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the accesseshistoric table
*
*/
class Accesseshistoric extends Model
{
    protected $table = 'accesseshistoric';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('month', 'year', 'pageviews', 'uniquevisitiors', 'usersessions');

}

