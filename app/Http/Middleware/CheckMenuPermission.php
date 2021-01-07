<?php

namespace App\Http\Middleware;

use Closure;
use App\Menu;
use App\Repositories\MenuRepository;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CheckMenuPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $uri = $request->getRequestUri();


        $menus = MenuRepository::listMenusUser($request->user()->id);

        if (count($menus) > 0) {
            foreach ($menus as $menu) {
                if ($menu->path == $uri) {
                    return $next($request);
                }
            }
        }

        return abort(403);
    }
}
