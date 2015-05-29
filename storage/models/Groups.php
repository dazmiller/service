<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the groups table
*
*/
class Groups extends Model
{
    protected $table = 'groups';

    public $timestamps = false;

    protected $fillable = array('group_name', 'can_sell', 'can_buy', 'count', 'auto_join');

}

