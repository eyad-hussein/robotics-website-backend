<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Image\Image;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image_id',
    ];
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
    public function mainPost(): HasOne
    {
        return $this->hasOne(MainPost::class);
    }
}
