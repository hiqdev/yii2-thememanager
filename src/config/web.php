<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'bootstrap' => [
        'themeManager' => 'themeManager',
    ],
    'components' => [
        'themeSettingsStorage' => [
            'class' => \hiqdev\thememanager\storage\SessionSettingsStorage::class,
        ],
        'themeManager' => array_filter([
            'class' => \hiqdev\thememanager\ThemeManager::class,
            'defaultTheme' => $params['themeManager.defaultTheme'],
        ]),
        'i18n' => [
            'translations' => [
                'hiqdev.thememanager' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/thememanager/messages',
                ],
            ],
        ],
    ],
    'modules' => array_filter([
        'thememanager' => [
            'class' => \hiqdev\thememanager\Module::class,
            'defaultRoute' => 'settings',
        ],
        'debug' => empty($params['debug.enabled']) ? null : [
            'panels' => [
                'themes' => [
                    'class' => \hiqdev\thememanager\debug\Panel::class,
                ],
            ],
        ],
    ]),
    'container' => [
        'singletons' => [
            \hiqdev\thememanager\menus\AbstractNavbarMenu::class => [
                'class' => \hiqdev\thememanager\menus\NavbarMenu::class,
            ],
        ],
        'definitions' => [
            \hiqdev\thememanager\widgets\PoweredBy::class => array_filter([
                'url'     => $params['poweredBy.url'],
                'name'    => $params['poweredBy.name'],
                'version' => $params['poweredBy.version'],
                'options' => $params['poweredBy.options'],
            ]),
            \hiqdev\thememanager\widgets\SocialLinks::class => array_filter([
                'links'   => $params['socialLinks.links'],
            ]),
            \hiqdev\thememanager\widgets\CopyrightYears::class => array_filter([
                'year'    => $params['copyright.year'],
                'years'   => $params['copyright.years'],
            ]),
            \hiqdev\thememanager\widgets\OrganizationLink::class => array_filter([
                'url'     => $params['organization.url'],
                'name'    => $params['organization.name'],
                'options' => $params['organization.options'],
            ]),
            \hiqdev\thememanager\widgets\LogoLink::class => array_filter([
                'url'               => $params['logo.url'] ?: '/',
                'name'              => $params['logo.name'] ?: $params['organization.name'] ?: 'Logo',
                'options'           => $params['logo.options'],
                'image'             => $params['logo.image'],
                'imageOptions'      => $params['logo.imageOptions'],
                'smallImage'        => $params['logo.smallImage'],
                'smallImageOptions' => $params['logo.smallImageOptions'],
            ]),
        ],
    ],
];
