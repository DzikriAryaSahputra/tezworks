<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'image_url',
        'demo_url',
        'technology',
        'is_featured',
    ];

    protected $casts = [
        'technology' => 'array',
        'is_featured' => 'boolean',
    ];
}
