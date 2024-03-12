<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface MekatroPageRepositoryInterface
{
    public function getVideos(): Collection;
}