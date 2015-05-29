<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the faqs table
*
*/
class Faqs extends Model
{
    protected $table = 'faqs';

    public $timestamps = false;

    protected $fillable = array('question', 'answer');

    public function faqscategories()
    {
        return $this->belongsTo('Faqscategories', 'category', 'id');
    }

}

