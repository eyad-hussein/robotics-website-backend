<?php

namespace App\Http\Controllers;

use App\Interfaces\VideoRepositoryInterface;
use App\Http\Requests\VideoRequest;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    protected VideoRepositoryInterface $videoRepository;
    public function __construct(VideoRepositoryInterface $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function storeVideoToCourse(VideoRequest $request, int $courseId)
    {
        return $this->videoRepository->storeVideoToCourse(array_merge($request->validated(), ['course_id' => $courseId]));
    }

    public function getVideosOfCourse(Request $request, int $courseId)
    {
        return $this->videoRepository->getVideosOfCourse($courseId);
    }


}
