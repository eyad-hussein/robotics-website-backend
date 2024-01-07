<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'video_id',
        'image_id',
    ];

    public function video()
    {
        return $this->hasOne(Video::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function parent()
    {
        return $this->belongsTo(Session::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Session::class, 'parent_id');
    }

    public function workshop()
    {
        return $this->belongsToMany(Workshop::class);
    }
}
