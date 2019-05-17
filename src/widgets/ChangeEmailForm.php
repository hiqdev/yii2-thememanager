<?php

namespace hiqdev\thememanager\widgets;

use yii\base\Widget;

class ChangeEmailForm extends Widget
{
    /**
     * @var \hiam\forms\ChangeEmailForm
     */
    public $model;

    public function run()
    {
        return $this->render('ChangeEmailForm', [
            'model' => $this->model,
        ]);
    }
}
