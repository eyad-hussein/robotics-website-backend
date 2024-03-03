<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class S3StorageService
{
    private $disk;

    public function __construct()
    {
        $this->disk = Storage::disk('s3');
    }
    public function storeImage(UploadedFile $file, string $path, string $name): string
    {
        try {
            return $file->storeAs($path . $name, $name . '.' . $file->extension(), 's3');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function deleteImage(string $path): void
    {
        $this->disk->delete($path);
    }
}