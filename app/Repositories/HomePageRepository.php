<?php

namespace App\Repositories;

use App\Interfaces\HomePageRepositoryInterface;
use App\Models\Image\MainCarouselImage;
use App\Models\Post\MainPost;
use App\Models\MetaData;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\Image\Image;
use App\Services\S3StorageService;
use Illuminate\Http\Response;


class HomePageRepository implements HomePageRepositoryInterface
{
    protected S3StorageService $s3StorageService;

    public function __construct(S3StorageService $s3StorageService)
    {
        $this->s3StorageService = $s3StorageService;
    }
    public function getCarouselImages(): Collection
    {
        return MainCarouselImage::with('image')->get();
    }

    public function storeCarouselImage(Request $request): void
    {
        $file = $request->file('image');
        $image = new Image();
        $image->save();
        $image->url = $this->s3StorageService->storeImage($file, 'images/main-carousel-images/', $image->id);

        $image->alt = $request->alt ?? 'image';
        $image->save();

        MainCarouselImage::create(['image_id' => $image->id, 'order' => (int) $request->order]);
    }

    public function deleteCarouselImage(int $id): void
    {
        $mainCarouselImage = MainCarouselImage::find($id);
        $this->s3StorageService->deleteImage($mainCarouselImage->image->url);
        $mainCarouselImage->image->delete();
        $mainCarouselImage->delete();
    }

    public function getPosts(): Collection
    {
        return MainPost::with('post.image')->get();
    }

    public function storePost(Request $request): void
    {
        $image = new Image();

        $image->url = $this->s3StorageService->storeImage($request->file('image'), 'images/posts/main-posts/' . $image->id, $image->id . $request->file('image')->getClientOriginalExtension());

        $image->save();

        MainPost::create(['image_id' => $image->id, 'title' => $request->title, 'content' => $request->content]);
    }

    public function deletePost(int $id): void
    {
        $mainPost = MainPost::find($id);
        $this->s3StorageService->deleteImage($mainPost->image->url);
        $mainPost->image->delete();
        $mainPost->delete();
    }

    public function getMetaData(): Response
    {
        $data = MetaData::whereIn('name', ['members', 'projects', 'participants'])->get();
        return response([
            'members' => $data[0]['value'],
            'participants' => $data[1]['value'],
            'projects' => $data[2]['value'],
        ]);
    }

    public function storeMetaData(Request $request): void
    {
        MetaData::create(['name' => $request->name, 'value' => $request->value]);
    }

    public function deleteMetaData(int $id): void
    {
        MetaData::find($id)->delete();
    }
}