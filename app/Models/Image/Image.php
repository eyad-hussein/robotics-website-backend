<?php

namespace App\Models\Image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Post\Post;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'alt',
    ];

    public function mainCarouselImage(): HasOne
    {
        return $this->hasOne(MainCarouselImage::class);
    }

    public function post(): HasOne
    {
        return $this->hasOne(Post::class);
    }
}
