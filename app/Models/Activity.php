<?php

namespace App\Models;

use App\Models\Workshop\Workshop;
use App\Models\Competition\Competition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'slots_available', 'start_date', 'end_date'];

    public function workshop(): HasOne
    {
        return $this->hasOne(Workshop::class);
    }

    public function competition(): HasOne
    {
        return $this->hasOne(Competition::class);
    }
}
