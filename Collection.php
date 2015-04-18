<?php
/**
 * @link    http://hiqdev.com/yii2-thememanager
 * @license http://hiqdev.com/yii2-thememanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\thememanager;

/**
 * Storage for all themes
 * ~~~
 * 'components' => [
 *     'themeManager' => [
 *         'class' => 'hiqdev\thememanager\Collection',
 *     ],
 * ]
 * ~~~
 */
class Collection extends \yii\base\Component
{
    /**
     * @inheritdoc
     */
    public function run ()
    {
        return "Hello!";
    }
}
