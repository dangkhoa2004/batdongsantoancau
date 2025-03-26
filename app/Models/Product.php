<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'images',
        'content',
        'hashtag',
        'posted_at'
    ];

    protected $casts = [
        'posted_at' => 'datetime',
        'images' => 'array',
    ];
}
