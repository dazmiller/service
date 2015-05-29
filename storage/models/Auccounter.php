<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the auccounter table
*
*/
class Auccounter extends Model
{
    protected $table = 'auccounter';

    public $primaryKey = 'auction_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('counter');

    public function auctions()
    {
        return $this->belongsTo('Auctions', 'auction_id', 'id');
    }

}

