<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use App\Http\Repository\MenuAdminRepository;

class MenuAdminComposer
{
    protected $adminMenu;

    public function __construct(MenuAdminRepository $admenu) {
        $this->adminMenu = $admenu->adminMenuList();
    }

    public function compose(View $view) {
        $view->with('adminMenu', $this->adminMenu);
    }
}
