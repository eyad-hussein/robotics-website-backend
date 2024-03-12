<?php

namespace App\Repositories;

use App\Interfaces\VideoRepositoryInterface;
use App\Models\Video\Video;
use App\Services\S3StorageService;
use App\Models\Course;
use App\Models\Image\Image;

class VideoRepository extends BaseRepository implements VideoRepositoryInterface
{
    protected S3StorageService $s3StorageService;

    public function __construct(S3StorageService $s3StorageService)
    {
        $this->s3StorageService = $s3StorageService;
    }

    // NOT DONE YET
    public function storeVideoToCourse(array $details): Video
    {
        $course = Course::find($details['course_id']);
        $video = Video::create([
            'image_id' => $details['image_id'],
            'alt' => $details['alt'],
            'description' => $details['description'],
            'url' => '',
        ]);

        $slug = $course->value('slug');
        $path = $this->s3StorageService->store($details['video'], "courses/$slug/$video->id/video", $video->id);

        $video->url = $path;

        $course->videos()->attach($video->id);

        return $video;
    }

    public function getVideosOfCourse(int $courseId)
    {
        return Course::with('videos.image')->find($courseId);
    }
}