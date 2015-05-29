<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the rates table
*
*/
class Rates extends Model
{
    protected $table = 'rates';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'ime', 'valuta', 'symbol');

}

