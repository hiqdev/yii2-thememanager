<?php

/*
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'bootstrap' => ['themeManager'],
    'components' => [
        'themeManager' => [
            'class' => \hiqdev\thememanager\ThemeManager::class,
        ],
    ],
    'modules' => [
        'thememanager' => [
            'class' => \hiqdev\thememanager\Module::class,
            'defaultRoute' => 'settings',
        ],
    ],
];
