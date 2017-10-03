<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

use yii\helpers\ArrayHelper;

/**
 * UserMenu widget.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class UserMenu extends \yii\base\Widget
{
    public $options = [];

    public $items = [];

    public function run()
    {
        return $this->render('UserMenu', [
            'header'    => ArrayHelper::remove($this->items, 'header'),
            'logout'    => ArrayHelper::remove($this->items, 'logout'),
            'profile'   => ArrayHelper::remove($this->items, 'profile'),
            'items'     => $this->items,
            'options'   => $this->options,
        ]);
    }
}
