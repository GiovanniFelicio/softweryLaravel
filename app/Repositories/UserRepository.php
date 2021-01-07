<?php

namespace App\Repositories;

use App\User;

class UserRepository{
    private $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function findAll()
    {
        return $this->model->all();
    }

    public function listMenus(User $user) {
        $u = $user->remember(60)->menus;
        dd($u);
    }
}
