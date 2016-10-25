<?php

/*
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class FancyPanel extends Widget
{
    public $panelClass = 'contactmethod';

    /**
     * Example: darkgray|blue|green|purple.
     *
     * @var string
     */
    public $color = 'darkgray';

    public $title;

    public function init()
    {
        echo Html::beginTag('div', ['class' => $this->panelClass . ' ' . $this->color]);
        echo Html::tag('h5', $this->title);
    }

    public function run()
    {
        echo Html::endTag('div');
    }

    public function beginBody()
    {
        echo Html::beginTag('p') . "\n";
    }

    public function endBody()
    {
        echo "\n" . Html::endTag('p');
    }
}
