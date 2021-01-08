<?php

namespace Modules\Menu\Http\Middleware;

use Closure;
use Modules\Menu\Entities\Repositories\Eloquent\MenuRepository;

class CheckMenuPermission
{
    private $menuRepository;

    public function __construct(MenuRepository $menuRepository) {
        $this->menuRepository = $menuRepository;
    }

    public function handle($request, Closure $next)
    {
        $uri = $request->getRequestUri();

        $menus = $this->menuRepository->listMenusUser($request->user()->id);

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
