<?php

namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function getById(int $id): Model
    {
        return $this->model->find($id);
    }

    public function delete(int $id): bool
    {
        return $this->model->destroy($id);
    }

    public function create(array $details): Model
    {
        return $this->model->create($details);
    }

    public function update($id, array $newDetails): bool
    {
        return $this->model->find($id)->update($newDetails);
    }
}