<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the faqscategories table
*
*/
class Faqscategories extends Model
{
    protected $table = 'faqscategories';

    public $timestamps = false;

    protected $fillable = array('category');

    public function faqs()
    {
        return $this->hasMany('Faqs', 'id', 'category');
    }

}

