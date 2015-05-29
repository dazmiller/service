<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the online table
*
*/
class Online extends Model
{
    protected $table = 'online';

    public $primaryKey = 'ID';

    public $timestamps = false;

    protected $fillable = array('SESSION', 'time');

}

