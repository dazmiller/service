<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the pendingnotif table
*
*/
class Pendingnotif extends Model
{
    protected $table = 'pendingnotif';

    public $timestamps = false;

    protected $fillable = array('auction_id', 'seller_id', 'winners', 'auction', 'seller', 'thisdate');

}

