<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the fees table
*
*/
class Fees extends Model
{
    protected $table = 'fees';

    public $timestamps = false;

    protected $fillable = array('fee_from', 'fee_to', 'fee_type', 'value', 'type');

}

