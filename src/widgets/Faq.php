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

use hiqdev\thememanager\FaqAsset;

/**
 * FAQ widget.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Faq extends \yii\base\Widget
{
    public $items = [];

    public function run()
    {
        FaqAsset::register($this->view);

        return $this->render('faq/root', [
            'items' => $this->items,
        ]);
    }
}
