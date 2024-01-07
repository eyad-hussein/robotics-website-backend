<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_id',
    ];
    public function workshops()
    {
        return $this->belongsToMany(Workshop::class, 'workshop_material');
    }
}
