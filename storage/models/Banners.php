<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the banners table
*
*/
class Banners extends Model
{
    protected $table = 'banners';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'name', 'type', 'views', 'clicks', 'url', 'sponsortext', 'alt', 'purchased',
        'width', 'height', 'user');

}

