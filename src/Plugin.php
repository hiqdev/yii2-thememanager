<?php

/*
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'modules' => [
            'thememanager' => [
                'class' => 'hiqdev\thememanager\Module',
            ],
        ],
    ];
}
