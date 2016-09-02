<?php

namespace hiqdev\thememanager\widgets;

use Yii;
use yii\base\Widget;

class LoginForm extends Widget
{
    public $model;

    public $options = [];

    public function run()
    {
        return $this->render('LoginForm', [
            'model'   => $this->model,
            'options' => $this->options,
        ]);
    }
}
