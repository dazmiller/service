<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the users table
*
*/
class Users extends Model
{
    protected $table = 'users';

    public $timestamps = false;

    public function getDates()
    {
        return array('lastlogin');
    }

    protected $fillable = array('nick', 'password', 'hash', 'name', 'address', 'city', 'prov', 'country', 'zip',
        'phone', 'email', 'reg_date', 'rate_sum', 'rate_num', 'birthdate', 'suspended', 'nletter', 'balance', 'auc_watch',
        'item_watch', 'endemailmode', 'startemailmode', 'emailtype', 'lastlogin', 'payment_details', 'groups', 'bn_only',
        'timecorrection', 'paypal_email', 'authnet_id', 'authnet_pass', 'worldpay_id', 'moneybookers_email', 'toocheckout_id',
        'language');

    public function bids()
    {
        return $this->hasMany('Bids', 'id', 'bidder');
    }

    public function feedbacks()
    {
        return $this->hasMany('Feedbacks', 'id', 'rated_user_id');
    }

    public function winners_seller()
    {
        return $this->hasMany('Winners', 'id', 'seller');
    }

    public function winners_winner()
    {
        return $this->hasMany('Winners', 'id', 'winner');
    }

}

