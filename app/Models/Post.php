<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function categories(): BelongsToMany{
        return $this->belongsToMany(Category::class);
    }
    public function create_post($title, $content) {
        return $this->create([
            'title' => $title,
            'content' => $content,
            // Weitere Felder hier
        ]);
    }
}
