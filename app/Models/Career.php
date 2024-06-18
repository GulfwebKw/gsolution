<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Career extends Model
{
    protected $fillable = [
        'title',
        'short_content',
        'content',
        'is_active',
    ];


    protected $casts = [
        'is_active' => 'boolean',
    ];
}
