<?php

namespace App\Repositories;

use App\Interfaces\MekatroPageRepositoryInterface;
use App\Models\Video\MainVideo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Services\S3StorageService;
use Illuminate\Http\Response;

class MekatroPageRepository implements MekatroPageRepositoryInterface
{
    public function getVideos(): Collection
    {
        return MainVideo::with("video")->get();
    }
}