<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the password_resets table
*
*/
class PasswordResets extends Model
{
    protected $table = 'password_resets';

    public $primaryKey = '';

    public $incrementing = false;

    protected $fillable = array('email', 'token');

}

