<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the auctions table
*
*/
class Auctions extends Model
{
    protected $table = 'auctions';

    public $timestamps = false;

    protected $fillable = array('user', 'title', 'subtitle', 'starts', 'description', 'pict_url', 'category',
        'secondcat', 'minimum_bid', 'shipping_cost', 'shipping_cost_additional', 'reserve_price', 'buy_now', 'auction_type',
        'duration', 'increment', 'shipping', 'payment', 'international', 'ends', 'current_bid', 'closed', 'photo_uploaded',
        'quantity', 'suspended', 'relist', 'relisted', 'num_bids', 'sold', 'shipping_terms', 'bn_only', 'bold', 'highlighted',
        'featured', 'current_fee', 'tax', 'taxinc');

    public function auccounter()
    {
        return $this->hasOne('Auccounter', 'id', 'auction_id');
    }

    public function bids()
    {
        return $this->hasMany('Bids', 'id', 'auction');
    }

    public function feedbacks()
    {
        return $this->hasMany('Feedbacks', 'id', 'auction_id');
    }

    public function winners()
    {
        return $this->hasMany('Winners', 'id', 'auction');
    }

}

