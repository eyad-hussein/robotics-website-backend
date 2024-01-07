<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'alt',
        'url',
    ];

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

}
