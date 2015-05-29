<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the gateways table
*
*/
class Gateways extends Model
{
    protected $table = 'gateways';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('gateways', 'paypal_address', 'paypal_required', 'paypal_active', 'authnet_address',
        'authnet_password', 'authnet_required', 'authnet_active', 'worldpay_address', 'worldpay_required', 'worldpay_active',
        'moneybookers_address', 'moneybookers_required', 'moneybookers_active', 'toocheckout_address', 'toocheckout_required',
        'toocheckout_active');

}

