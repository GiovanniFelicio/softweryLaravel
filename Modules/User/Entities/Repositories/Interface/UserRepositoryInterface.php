<?php

namespace App\Repositories;

use Modules\User\Entities\User;
use Illuminate\Support\Collection;
use App\Repositories\Eloquent\BaseRepository;

class UserRepositoryInterface extends BaseRepository{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}
