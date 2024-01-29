<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCarouselImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_id'
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}