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
            'widgets' => [
                'Menu' => \yii\widgets\Menu::class,
                'Breadcrumbs' => \yii\widgets\Breadcrumbs::class,
                'Alert' => \yii\bootstrap\Alert::class,
                'PoweredBy' => \hiqdev\thememanager\widgets\PoweredBy::class,
                'LoginForm' => \hiqdev\thememanager\widgets\LoginForm::class,
                'SocialLinks' => \hiqdev\thememanager\widgets\SocialLinks::class,
                'CopyrightYears' => \hiqdev\thememanager\widgets\CopyrightYears::class,
                'OrganizationLink' => \hiqdev\thememanager\widgets\OrganizationLink::class,
            ],
        ],
    ],
    'modules' => [
        'thememanager' => [
            'class' => \hiqdev\thememanager\Module::class,
            'defaultRoute' => 'settings',
        ],
    ],
];
