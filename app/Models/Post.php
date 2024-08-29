<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property bool $published
 * @property Carbon $published_at
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'published',
        'published_at',
    ];

    protected $casts = [
        'published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public static array $rules = [
        'title' => ['required', 'string', 'max:100'],
        'content' => ['required', 'string', 'max:10000'],
        'published_at' => ['nullable', 'string', 'date'],
        'published' => ['nullable', 'boolean'],
    ];

}
