<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainCarouselImage;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['url'];

    public function workshops()
    {
        return $this->belongsToMany(Workshop::class, 'workshop_image');
    }

    public function sessions()
    {
        return $this->belongsTo(Session::class);
    }

    public function mainCarouselImages()
    {
        return $this->hasMany(MainCarouselImage::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
