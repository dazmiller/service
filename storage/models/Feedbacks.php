<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the feedbacks table
*
*/
class Feedbacks extends Model
{
    protected $table = 'feedbacks';

    public $timestamps = false;

    protected $fillable = array('rater_user_nick', 'feedback', 'rate', 'feedbackdate');

    public function auctions()
    {
        return $this->belongsTo('Auctions', 'auction_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('Users', 'rated_user_id', 'id');
    }

}

