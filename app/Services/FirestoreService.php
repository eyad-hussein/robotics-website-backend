<?php

namespace App\Services;

use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Core\Exception\GoogleException;

class FirestoreService
{
    protected $firestore;
    protected $storage;

    public function __construct()
    {
        $this->firestore = new FirestoreClient();

        try {
            // Replace 'your-project-id' with your actual Google Cloud Project ID
            $this->storage = new StorageClient(['projectId' => 'robotics-website-4a145']);
        } catch (GoogleException $e) {
            // Handle exception, e.g., log or throw
        }
    }

    public function getImageUrlsFromStorage($bucketName)
    {
        $bucket = $this->storage->bucket($bucketName);

        $objects = $bucket->objects();

        $imageUrls = [];

        foreach ($objects as $object) {
            $imageUrls[] = $object->signedUrl(strtotime('+100 years'));
        }

        return $imageUrls;
    }

    public function getVideoUrlsFromStorge($bucketName)
    {
        $bucket = $this->storage->bucket($bucketName);

        $objects = $bucket->objects(['prefix' => 'videos/']);

        $videoUrls = [];

        foreach ($objects as $object) {
            // Assuming all objects in the bucket are videos
            $videoUrls[] = $object->signedUrl(strtotime('+100 years'));
        }

        return $videoUrls;
    }
}
