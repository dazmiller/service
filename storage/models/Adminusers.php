<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the adminusers table
*
*/
class Adminusers extends Model
{
    protected $table = 'adminusers';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('id', 'username', 'password', 'hash', 'created', 'lastlogin', 'status', 'notes');

}

