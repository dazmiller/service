<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the bids table
*
*/
class Bids extends Model
{
    protected $table = 'bids';

    public $timestamps = false;

    protected $fillable = array('bid', 'bidwhen', 'quantity');

    public function auctions()
    {
        return $this->belongsTo('Auctions', 'auction', 'id');
    }

    public function users()
    {
        return $this->belongsTo('Users', 'bidder', 'id');
    }

}

