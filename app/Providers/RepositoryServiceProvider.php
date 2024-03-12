<?php

namespace App\Providers;

use App\Interfaces\CourseRepositoryInterface;
use App\Interfaces\MekatroPageRepositoryInterface;
use App\Interfaces\VideoRepositoryInterface;
use App\Repositories\CourseRepository;
use App\Repositories\MekatroPageRepository;
use App\Repositories\VideoRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\BaseRepository;
use App\Interfaces\BaseRepositoryInterface;
use App\Interfaces\HomePageRepositoryInterface;
use App\Repositories\HomePageRepository;
use App\Interfaces\WorkshopPageRepositoryInterface;
use App\Repositories\WorkshopPageRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(HomePageRepositoryInterface::class, HomePageRepository::class);
        $this->app->bind(WorkshopPageRepositoryInterface::class, WorkshopPageRepository::class);
        $this->app->bind(VideoRepositoryInterface::class, VideoRepository::class);
        $this->app->bind(CourseRepositoryInterface::class, CourseRepository::class);
        $this->app->bind(MekatroPageRepositoryInterface::class, MekatroPageRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
