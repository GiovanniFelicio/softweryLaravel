<?php

namespace Modules\User\Entities\Repositories\Eloquent;

use Modules\User\Entities\User;
use App\Repositories\EloquentRepositoryInterface;


class UserRepository extends User implements EloquentRepositoryInterface{

    public function create(array $attributes): User {
        return $this->create($attributes);
    }

    public function find($id): ?User {

        return $this->find($id);
    }

    public function findAll() {
        return $this->model->all();
    }
}
