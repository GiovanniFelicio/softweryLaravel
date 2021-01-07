<?php

namespace App;

use App\Repositories\MenuRepository;
use Watson\Rememberable\Rememberable;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    use Rememberable;

    protected $fillable = [
        'name',
        'path',
        'active'
    ];

    protected $table = 'sft_menu';

}
