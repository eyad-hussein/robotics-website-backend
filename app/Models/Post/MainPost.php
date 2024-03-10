<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MainPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'order',
    ];
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
