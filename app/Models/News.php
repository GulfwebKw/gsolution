<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'is_active',
        'author_id',
    ];


    protected $casts = [
        'is_active' => 'boolean',
        'author_id' => 'int',
    ];

    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
