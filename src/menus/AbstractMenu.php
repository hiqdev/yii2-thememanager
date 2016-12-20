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
    public static function create($config = [])
    {
        if (is_array($config) && empty($config['class'])) {
            $config['class'] = get_called_class();
        }

        return Yii::createObject($config);
    }

    /**
     * @inheritdoc
     */
    abstract public function render($options = []);
}
