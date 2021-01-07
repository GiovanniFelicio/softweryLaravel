<?php

namespace App\Repositories;

use App\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class MenuRepository{
    private $model;

    public function __construct()
    {
        $this->model = new Menu();
    }

    public function findAll()
    {
        return $this->model->all();
    }

    public static function listMenusUser(int $id) {
        return Cache::remember('menus', 60, function () use ($id) {
            return DB::table('sft_menu')
            ->select('sft_menu.*')
            ->join('sft_menu_user', 'sft_menu.id', '=', 'sft_menu_user.menu_id')
            ->join('sft_user', 'sft_menu_user.user_id', '=', 'sft_user.id')
            ->where('sft_user.id', '=', $id)->get();
        });
    }

}
