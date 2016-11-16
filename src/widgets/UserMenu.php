<?php

/*
 * AdminLte Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

class UserMenu extends \yii\base\Widget
{
    public $options;

    public $items;

    public function run() {
        return $this->render('UserMenu', [
            'header' => $this->items['header']['label'],
            'body' => $this->items['body']['label'],
        ]);
    }
}
