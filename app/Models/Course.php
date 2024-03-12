<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Image\Image;
use App\Models\Video\Video;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'slug',
        'thumbnail',
    ];

    public function videos(): BelongsToMany
    {
        return $this->belongsToMany(Video::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
