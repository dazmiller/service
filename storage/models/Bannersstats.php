<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the bannersstats table
*
*/
class Bannersstats extends Model
{
    protected $table = 'bannersstats';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('banner', 'purchased', 'views', 'clicks');

}

