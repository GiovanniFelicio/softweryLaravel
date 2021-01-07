<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class Validators {

    public static function userValidator($value) {
        $validator = Validator::make($value, [
            'name' => 'required|string|max:255',
            'email' => 'required|unique:sft_user|string',
            'login' => 'required|unique:sft_user|string',
            'password' => 'required'
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'login.required' => 'Login is required',
            'password.required' => 'Password is required',
            'name.string' => 'Name is not a string',
            'email.string' => 'Email is not a string',
            'login.string' => 'Login is not a string'
        ]);

        return $validator;
    }
}

?>
