<?php
/**
 * Theme Manager for Yii2
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
        'themeManager' => [
            'class' => \hiqdev\thememanager\ThemeManager::class,
        ],
        'i18n' => [
            'translations' => [
                'hiqdev:thememanager' => [
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
        'definitions' => [
            \hiqdev\thememanager\widgets\PoweredBy::class => [
                'url'     => !empty($params['poweredByUrl']) ? $params['poweredByUrl'] : null,
                'name'    => !empty($params['poweredByName']) ? $params['poweredByName'] : null,
                'version' => !empty($params['poweredByVersion']) ? $params['poweredByVersion'] : null,
                'options' => !empty($params['poweredByOptions']) ? $params['poweredByOptions'] : [],
            ],
            \hiqdev\thememanager\widgets\SocialLinks::class => [
                'links'   => !empty($params['socialLinks']) ? $params['socialLinks'] : [],
            ],
            \hiqdev\thememanager\widgets\CopyrightYears::class => [
                'years'   => !empty($params['copyrightYears']) ? $params['copyrightYears'] : null,
                'year'    => !empty($params['copyrightYear']) ? $params['copyrightYear'] : null,
            ],
            \hiqdev\thememanager\widgets\OrganizationLink::class => [
                'url'     => !empty($params['organizationUrl']) ? $params['organizationUrl'] : null,
                'name'    => !empty($params['organizationName']) ? $params['organizationName'] : null,
                'options' => !empty($params['organizationOptions']) ? $params['organizationOptions'] : [],
            ],
            \hiqdev\thememanager\widgets\LogoLink::class => [
                'image'   => !empty($params['logoImage']) ? $params['logoImage'] : null,
                'name'    => !empty($params['logoName']) ? $params['logoName'] :
                            (!empty($params['organizationName']) ? $params['organizationName'] : 'Logo'),
                'url'     => !empty($params['logoUrl']) ? $params['logoUrl'] : '/',
                'options' => !empty($params['logoOptions']) ? $params['logoOptions'] : [],
                'imageOptions' => !empty($params['logoImageOptions']) ? $params['logoImageOptions'] : [],
            ],
        ],
    ],
];
