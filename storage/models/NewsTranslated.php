<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the news_translated table
*
*/
class NewsTranslated extends Model
{
    protected $table = 'news_translated';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'lang', 'title', 'content');

}

