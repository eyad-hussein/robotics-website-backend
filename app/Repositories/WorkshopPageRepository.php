<?php

namespace App\Repositories;

use App\Interfaces\WorkshopPageRepositoryInterface;
use App\Models\Workshop\MainWorkshop;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Services\S3StorageService;
use Illuminate\Http\Response;


class WorkshopPageRepository implements WorkshopPageRepositoryInterface
{
    protected S3StorageService $s3StorageService;

    public function __construct(S3StorageService $s3StorageService)
    {
        $this->s3StorageService = $s3StorageService;
    }
    public function getWorkshops(): Collection
    {
        return MainWorkshop::all();
    }

    // YET TO BE DONE
    public function storeWorkshop(Request $request): void
    {
        $file = $request->file('image');
        $image = new Image();
        $image->save();
        $image->url = $this->s3StorageService->storeImage($file, 'images/main-carousel-images/', $image->id);

        $image->alt = $request->alt ?? 'image';
        $image->save();

        MainCarouselImage::create(['image_id' => $image->id, 'order' => (int) $request->order]);
    }

    // YET TO BE DONE
    public function deleteWorkshop(int $id): void
    {
        $mainCarouselImage = MainCarouselImage::find($id);
        $this->s3StorageService->deleteImage($mainCarouselImage->image->url);
        $mainCarouselImage->image->delete();
        $mainCarouselImage->delete();
    }
}