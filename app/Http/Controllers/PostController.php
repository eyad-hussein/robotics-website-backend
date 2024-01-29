<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\MainPost;
use App\Models\Image;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return response([
            "posts" => $posts,
        ], 200);
    }

    public function showMainPosts()
    {
        $mainPostsIds = MainPost::all();
        $mainPosts = [];
        $mainPostsImages = [];

        foreach ($mainPostsIds as $mainPost) {
            $mainPosts[] = Post::find($mainPost->post_id);
            $temp = Post::find($mainPost->post_id);
            $mainPostsImages[] = Image::find($temp->image_id);
        }


        return response([
            "mainPosts" => $mainPosts,
            "mainPostsImages" => $mainPostsImages,
        ]);
    }
}
