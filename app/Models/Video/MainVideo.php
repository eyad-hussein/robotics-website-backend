<?php

namespace App\Models\Video;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MainVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_id',
        'order',
    ];

    public function video(): BelongsTo
    {
        return $this->belongsTo(Video::class);
    }
}
