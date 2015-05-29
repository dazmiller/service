<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the winners table
*
*/
class Winners extends Model
{
    protected $table = 'winners';

    public $timestamps = false;

    protected $fillable = array('bid', 'closingdate', 'feedback_win', 'feedback_sel', 'qty', 'paid', 'bf_paid',
        'ff_paid');

    public function auctions()
    {
        return $this->belongsTo('Auctions', 'auction', 'id');
    }

    public function users_seller()
    {
        return $this->belongsTo('Users', 'seller', 'id');
    }

    public function users_winner()
    {
        return $this->belongsTo('Users', 'winner', 'id');
    }

}

