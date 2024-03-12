<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

interface WorkshopPageRepositoryInterface
{
    public function getWorkshops(): Collection;
    public function storeWorkshop(Request $request): void;
    public function deleteWorkshop(int $id): void;
}