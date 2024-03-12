<?php

namespace App\Models\Video;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Course;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Image\Image;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_id',
        'url',
        'alt',
        'description'
    ];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    public function mainVideo(): HasOne
    {
        return $this->hasOne(MainVideo::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
