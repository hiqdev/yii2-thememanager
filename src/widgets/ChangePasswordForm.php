<?php

namespace hiqdev\thememanager\widgets;

use yii\base\Widget;

class ChangePasswordForm extends Widget
{
    /**
     * @var \hiam\forms\ChangePasswordForm
     */
    public $model;

    public function run()
    {
        return $this->render('ChangePasswordForm', [
            'model' => $this->model,
        ]);
    }
}
