<?php

namespace crudle\app\setup\models;

use crudle\app\setup\enums\Type_Menu;
use crudle\app\setup\models\base\BaseAppMenu;

class AppSidebarMenu extends BaseAppMenu
{
    public function init()
    {
        $this->type = Type_Menu::Sidebar;
    }
}