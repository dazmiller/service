<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the faqscat_translated table
*
*/
class FaqscatTranslated extends Model
{
    protected $table = 'faqscat_translated';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'lang', 'category');

}

