<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the useraccounts table
*
*/
class Useraccounts extends Model
{
    protected $table = 'useraccounts';

    public $primaryKey = 'useracc_id';

    public $timestamps = false;

    protected $fillable = array('auc_id', 'user_id', 'date', 'setup', 'featured', 'bold', 'highlighted', 'subtitle',
        'relist', 'reserve', 'buynow', 'image', 'extcat', 'signup', 'buyer', 'finalval', 'balance', 'total', 'paid');

}

