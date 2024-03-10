<?php

namespace App\Http\Controllers;

use App\Interfaces\WorkshopPageRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkshopPageController extends Controller
{
    protected WorkshopPageRepositoryInterface $workshopPageRepository;
    public function __construct(WorkshopPageRepositoryInterface $workshopPageRepository)
    {
        $this->workshopPageRepository = $workshopPageRepository;
    }

    public function getWorkshops(): Collection
    {
        return $this->workshopPageRepository->getWorkshops();
    }

}
