<?php
/**
 * @link        http://hiqdev.com/yii2-thememanager
 * @license     BSD 3-clause
 * @copyright   Copyright (c) 2015 HiQDev
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
