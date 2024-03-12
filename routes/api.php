<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MekatroPageController;
use App\Http\Controllers\WorkshopPageController;
use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/main/carousel-images', [HomePageController::class, 'getCarouselImages']);
Route::post('/admin/main/carousel-images', [HomePageController::class, 'storeCarouselImage']);
Route::delete('/admin/main/carousel-images/{id}', [HomePageController::class, 'deleteCarouselImage']);

Route::get('/main/posts', [HomePageController::class, 'getPosts']);
Route::post('/admin/main/posts', [HomePageController::class, 'storePost']);
Route::delete('/admin/main/posts/{id}', [HomePageController::class, 'deletePost']);

Route::get('/main/meta-data', [HomePageController::class, 'getMetaData']);
Route::post('/admin/main/meta-data', [HomePageController::class, 'storeMetaData']);
Route::delete('/admin/main/meta-data/{id}', [HomePageController::class, 'deleteMetaData']);

Route::get('/main/workshops', [WorkshopPageController::class, 'getWorkshops']);

Route::get('/main/mekatro/videos', [MekatroPageController::class, 'getVideos']);

Route::post('/courses/{courseId}/videos', [VideoController::class, 'storeVideoToCourse']);
Route::get('/courses/{courseId}/videos', [VideoController::class, 'getVideosOfCourse']);


Route::post('/courses', [CourseController::class, 'store']);