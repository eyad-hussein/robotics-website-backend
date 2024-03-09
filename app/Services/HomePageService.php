<?php

namespace App\Services;

use App\Interfaces\HomePageRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomePageService
{
    protected HomePageRepositoryInterface $homePageRepository;

    public function __construct(HomePageRepositoryInterface $homePageRepository)
    {
        $this->homePageRepository = $homePageRepository;
    }

    public function getCarouselImages(): Collection
    {
        return $this->homePageRepository->getCarouselImages();
    }

    public function storeCarouselImage(Request $request): void
    {
        $this->homePageRepository->storeCarouselImage($request);
    }

    public function deleteCarouselImage(int $id): void
    {
        $this->homePageRepository->deleteCarouselImage($id);
    }

    public function getPosts(): Collection
    {
        return $this->homePageRepository->getPosts();
    }

    public function storePost(Request $request): void
    {
        $this->homePageRepository->storePost($request);
    }

    public function deletePost(int $id): void
    {
        $this->homePageRepository->deletePost($id);
    }

    public function getMetaData(): Response
    {
        return $this->homePageRepository->getMetaData();
    }

    public function storeMetaData(Request $request): void
    {
        $this->homePageRepository->storeMetaData($request);
    }

    public function deleteMetaData(int $id): void
    {
        $this->homePageRepository->deleteMetaData($id);
    }
}