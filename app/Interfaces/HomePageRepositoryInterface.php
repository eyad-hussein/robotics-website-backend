<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface HomePageRepositoryInterface
{
    public function getCarouselImages(): Collection;
    public function storeCarouselImage(Request $request): void;
    public function deleteCarouselImage(int $id): void;
    public function getPosts(): Collection;
    public function storePost(Request $request): void;
    public function deletePost(int $id): void;
    public function getMetaData(): Collection;
    public function storeMetaData(Request $request): void;
    public function deleteMetaData(int $id): void;
}