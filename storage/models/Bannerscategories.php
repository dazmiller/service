<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the bannerscategories table
*
*/
class Bannerscategories extends Model
{
    protected $table = 'bannerscategories';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('banner', 'category');

}

