<?php

namespace App\Repositories;

use App\User;

class UserRepository{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function findAll()
    {
        return $this->model->all();
    }
}

?>