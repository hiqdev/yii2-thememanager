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

class UserMenu extends \yii\base\Widget
{
    public $options;

    public $items;

    public function run()
    {
        return $this->render('UserMenu', [
            'header' => $this->items['header']['label'],
            'body' => $this->items['body']['label'],
        ]);
    }
}
