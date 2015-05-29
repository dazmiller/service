<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the closedrelisted table
*
*/
class Closedrelisted extends Model
{
    protected $table = 'closedrelisted';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('auction', 'relistdate', 'newauction');

}

