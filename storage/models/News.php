<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the news table
*
*/
class News extends Model
{
    protected $table = 'news';

    public $timestamps = false;

    protected $fillable = array('title', 'content', 'new_date', 'suspended');

}

