<?php

namespace App\Models\Workshop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MainWorkshop extends Model
{
    use HasFactory;

    protected $fillable = ['workshop_id'];

    public function workshop(): BelongsTo
    {
        return $this->belongsTo(Workshop::class);
    }
}
