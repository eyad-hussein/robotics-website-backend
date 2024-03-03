<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function getAll(): Collection;
    public function getById(int $id): Model;
    public function delete(int $id): bool;
    public function create(array $details): Model;
    public function update($id, array $newDetails): bool;
}
