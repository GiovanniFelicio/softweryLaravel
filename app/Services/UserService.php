<?php

namespace App\Services;

use App\User;
use App\Validators\Validators;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use InvalidArgumentException;

class UserService {

    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function generate_and_create($value) {

        $user = new User();

        $user->name = $value['name'];
        $user->email = $value['email'];
        $user->login = $value['login'];
        $user->company_id = 0;
        $user->password = Hash::make($value['password']);

        $user = $user->save();

        return $user;
    }
}
