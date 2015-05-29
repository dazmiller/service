<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the counters table
*
*/
class Counters extends Model
{
    protected $table = 'counters';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('users', 'inactiveusers', 'auctions', 'closedauctions', 'bids', 'suspendedauctions');

}

