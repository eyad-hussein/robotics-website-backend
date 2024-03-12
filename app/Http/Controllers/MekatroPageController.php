<?php

namespace App\Http\Controllers;

use App\Interfaces\MekatroPageRepositoryInterface;
use Illuminate\Http\Request;

class MekatroPageController extends Controller
{
    protected MekatroPageRepositoryInterface $mekatroPageRepository;

    public function __construct(MekatroPageRepositoryInterface $mekatroPageRepository)
    {
        $this->mekatroPageRepository = $mekatroPageRepository;
    }
    public function getVideos()
    {
        return $this->mekatroPageRepository->getVideos();
    }
}