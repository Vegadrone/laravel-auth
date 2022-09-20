<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'post_image',
        'post_date',
        'post_content',
    ];
}
