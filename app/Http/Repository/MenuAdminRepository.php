<?php

namespace App\Http\Repository;

use App\Models\Menu;

class MenuAdminRepository
{
    public function adminMenuList() {
        $menuList = Menu::where('menu_active', 1)->where('menu_level', 1)->orderBy('menu_order')->get();
        return $menuList;
    }
}
