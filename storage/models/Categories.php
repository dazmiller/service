<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the categories table
*
*/
class Categories extends Model
{
    protected $table = 'categories';

    public $primaryKey = 'cat_id';

    public $timestamps = false;

    protected $fillable = array('parent_id', 'left_id', 'right_id', 'level', 'cat_name', 'sub_counter', 'counter',
        'cat_colour', 'cat_image');

}

