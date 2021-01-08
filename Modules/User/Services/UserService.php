<?php

namespace Modules\User\Services;

use InvalidArgumentException;
use Modules\User\Entities\User;
use Illuminate\Support\Facades\Hash;
use Modules\User\Entities\Repositories\Eloquent\UserRepository;

class UserService {

    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
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
