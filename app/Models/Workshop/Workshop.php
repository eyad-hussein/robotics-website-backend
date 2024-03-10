<?php

namespace App\Models\Workshop;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = ['activity_id'];

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }

    public function mainWorkshop(): HasOne
    {
        return $this->hasOne(MainWorkshop::class);
    }
}
