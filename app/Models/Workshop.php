<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'location',
        'duration',
    ];


    protected $casts = [
        // 'start_date' => 'datetime',
        'duration' => 'integer',
    ];

    public function images()
    {
        return $this->belongsToMany(Image::class, 'workshop_image');
    }

    public function activeWorkshops()
    {
        return $this->hasMany(ActiveWorkshop::class);
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'workshop_material');
    }

    public function sessions()
    {
        return $this->belongsToMany(Session::class);
    }
}
