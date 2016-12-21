<?php

namespace hiqdev\thememanager\menus;

use Yii;

/**
 * Abstract Menu.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
abstract class AbstractMenu implements MenuInterface
{
    /**
     * @inheritdoc
     */
    public static function widget($menuConfig = [], $widgetConfig = [])
    {
        return static::create($menuConfig)->run($widgetConfig);
    }

    /**
     * @inheritdoc
     */
    public static function create($config = [])
    {
        $config['class'] = get_called_class();

        return Yii::createObject($config);
    }

    /**
     * @inheritdoc
     */
    abstract public function run($config = []);
}
