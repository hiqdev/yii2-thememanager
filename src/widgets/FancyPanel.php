<?php

namespace hiqdev\thememanager\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class FancyPanel extends Widget
{
    public $panelClass = 'contactmethod';

    /**
     * Example: darkgray|blue|green|purple
     *
     * @var string
     */
    public $color = 'darkgray';

    public $title;

    public function init()
    {
        print Html::beginTag('div', ['class' => $this->panelClass . ' ' . $this->color]);
        print Html::tag('h5', $this->title);
    }

    public function run()
    {
        print Html::endTag('div');
    }

    public function beginBody()
    {
        print Html::beginTag('p') . "\n";
    }

    public function endBody()
    {
        print "\n" . Html::endTag('p');
    }
}
