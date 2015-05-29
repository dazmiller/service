<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the accounts table
*
*/
class Accounts extends Model
{
    protected $table = 'accounts';

    public $timestamps = false;

    protected $fillable = array('nick', 'name', 'text', 'type', 'paid_date', 'amount', 'day', 'week', 'month',
        'year');

}

