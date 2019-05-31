<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_name', 
        'post_details', 
        'category',
        'post_description', 
        'post_image',
    ];
}
