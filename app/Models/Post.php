<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "image_id"
    ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function mainPosts()
    {
        return $this->hasOne(MainPost::class);
    }
}