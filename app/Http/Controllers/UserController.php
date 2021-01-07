<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Validators\Validators;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index() {
        return view('user.index');
    }

    public function create() {
        return view('user.create');
    }

    public function save(Request $request) {
        $validator = Validators::userValidator($request->all());

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = $this->userService->generate_and_create($request->all());

        if ($user) {
            return back()->with('success', 'Successfully when create');
        }
    }
}
