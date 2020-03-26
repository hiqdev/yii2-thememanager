<?php

namespace hiqdev\thememanager\widgets;

use Yii;
use yii\base\Widget;

class AlertWidget extends Widget
{
    /** @var mixed */
    public $widget;

    public function run()
    {
        if (!empty($this->widget)) {
            return Yii::createObject($this->widget)->run();
        }
    }
}
