<?php

namespace crudle\app\main\controllers;

use crudle\app\main\controllers\base\BaseFormController;
use crudle\app\main\enums\Type_View;
use crudle\app\main\models\EmailForm;

class EmailController extends BaseFormController
{
    public function modelClass(): string
    {
        return EmailForm::class;
    }

    public function actionIndex()
    {
        $model = new EmailForm();

        return $this->renderAjax('/email', [
                    'model' => $model
                ]);
    }

    // ViewInterface
    public function defaultActionViewType()
    {
        return Type_View::Form;
    }
}
