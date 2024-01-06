<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveWorkshop extends Model
{
    use HasFactory;
    protected $fillable = ['workshop_id'];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
