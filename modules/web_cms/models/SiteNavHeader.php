<?php

namespace crudle\ext\web_cms\models;

use crudle\ext\web_cms\enums\Type_Menu;
use crudle\ext\web_cms\models\base\BaseWebMenu;

class SiteNavHeader extends BaseWebMenu
{
    public function init()
    {
        $this->type = Type_Menu::HeaderNav;
    }
}
