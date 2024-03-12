<?php

namespace App\Interfaces;

use App\Models\Video\Video;

interface VideoRepositoryInterface extends BaseRepositoryInterface
{
    public function storeVideoToCourse(array $details): Video;
    public function getVideosOfCourse(int $courseId);
}