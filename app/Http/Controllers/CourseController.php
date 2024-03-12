<?php

namespace App\Http\Controllers;

use App\Interfaces\CourseRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCourseRequest;

class CourseController extends Controller
{
    protected CourseRepositoryInterface $courseRepository;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function store(StoreCourseRequest $request)
    {
        return $this->courseRepository->store($request->validated());
    }
}
