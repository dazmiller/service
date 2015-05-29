<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the countries table
*
*/
class Countries extends Model
{
    protected $table = 'countries';

    public $primaryKey = 'country';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array();

}

