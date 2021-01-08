<?php

namespace Modules\Menu\Entities\Repositories\Eloquent;

use Modules\Menu\Entities\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Repositories\EloquentRepositoryInterface;

class MenuRepository extends Menu implements EloquentRepositoryInterface{

    public function create(array $attributes): Menu {
        return $this->create($attributes);
    }

    public function find($id): ?Menu {

        return $this->find($id);
    }

    public function findAll() {
        return $this->all();
    }

    public function listMenusUser(int $id) {
        return Cache::remember('menus', 60, function () use ($id) {
            return DB::table('sft_menu')
            ->select('sft_menu.*')
            ->join('sft_menu_user', 'sft_menu.id', '=', 'sft_menu_user.menu_id')
            ->join('sft_user', 'sft_menu_user.user_id', '=', 'sft_user.id')
            ->where('sft_user.id', '=', $id)->get();
        });
    }
}
