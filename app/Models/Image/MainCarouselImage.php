<?php

namespace App\Models\Image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MainCarouselImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_id',
    ];

    protected $casts = [
        'image_id' => 'integer',
        'order' => 'integer',
    ];
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
