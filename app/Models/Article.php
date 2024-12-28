<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'theme_id',
        'image_url',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
