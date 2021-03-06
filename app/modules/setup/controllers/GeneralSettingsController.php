<?php

namespace crudle\app\setup\controllers;

use crudle\app\setup\controllers\base\BaseSettingsController;
use crudle\app\setup\models\GeneralSettingsForm;

class GeneralSettingsController extends BaseSettingsController
{
    public function modelClass(): string
    {
        return GeneralSettingsForm::class;
    }
}
