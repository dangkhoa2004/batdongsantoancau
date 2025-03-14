<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'images',
        'content',
        'link',
        'code',
        'info',
        'document_type',
        'area_mb',
        'area_sd',
        'width',
        'length',
        'floors',
        'bedrooms',
        'bathrooms',
        'price',
        'direction',
        'feng_shui_direction',
        'location',
        'posted_at'
    ];

    protected $casts = [
        'posted_at' => 'datetime',
        'images' => 'array',
    ];
}
