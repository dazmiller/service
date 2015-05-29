<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the tax table
*
*/
class Tax extends Model
{
    protected $table = 'tax';

    public $timestamps = false;

    protected $fillable = array('tax_name', 'tax_rate', 'countries_seller', 'countries_buyer', 'fee_tax');

}

