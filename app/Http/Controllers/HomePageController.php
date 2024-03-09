<?php

namespace App\Http\Controllers;

use App\Services\HomePageService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomePageController extends Controller
{
    protected HomePageService $homePageService;

    public function __construct(HomePageService $homePageService)
    {
        $this->homePageService = $homePageService;
    }

    public function getCarouselImages(): Collection
    {
        return $this->homePageService->getCarouselImages();
    }

    public function storeCarouselImage(Request $request): void
    {
        $this->homePageService->storeCarouselImage($request);
    }

    public function deleteCarouselImage(int $id): void
    {
        $this->homePageService->deleteCarouselImage($id);
    }

    public function getPosts(): Collection
    {
        return $this->homePageService->getPosts();
    }

    public function storePost(Request $request): void
    {
        $this->homePageService->storePost($request);
    }

    public function deletePost(int $id): void
    {
        $this->homePageService->deletePost($id);
    }

    public function getMetaData(): Response
    {
        return $this->homePageService->getMetaData();
    }

    public function storeMetaData(Request $request): void
    {
        $this->homePageService->storeMetaData($request);
    }

    public function deleteMetaData(int $id): void
    {
        $this->homePageService->deleteMetaData($id);
    }
}
