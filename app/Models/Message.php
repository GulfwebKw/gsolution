<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $subject
 * @property array $meta
 * @property string $ip_address
 * @property bool $is_read
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Message extends Model
{
    protected $fillable = [
        'name',
        'type',
        'subject',
        'meta',
        'ip_address',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'meta' => 'array',
    ];
}
