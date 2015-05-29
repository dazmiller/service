<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the currentaccesses table
*
*/
class Currentaccesses extends Model
{
    protected $table = 'currentaccesses';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('day', 'month', 'year', 'pageviews', 'uniquevisitors', 'usersessions');

}

