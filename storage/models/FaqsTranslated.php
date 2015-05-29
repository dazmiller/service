<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the faqs_translated table
*
*/
class FaqsTranslated extends Model
{
    protected $table = 'faqs_translated';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'lang', 'question', 'answer');

}

