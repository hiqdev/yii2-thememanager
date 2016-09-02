<?php

/*
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

use yii\base\Widget;

class LoginForm extends Widget
{
    public $model;

    public $options = [];

    public function run()
    {
        return $this->render('LoginForm', [
            'model' => $this->model,
            'options' => $this->options,
        ]);
    }
}
