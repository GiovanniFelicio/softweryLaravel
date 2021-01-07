<?php

namespace App;

use Illuminate\Support\Facades\Cache;
use Watson\Rememberable\Rememberable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    use Rememberable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'login',
        'email',
        'password',
        'date_birth',
        'number',
        'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'sft_user';

    public function menus() {
        return $this->belongsToMany(
            Menu::class,
            'sft_menu_user',
            'menu_id',
            'user_id'
        );
    }
}
