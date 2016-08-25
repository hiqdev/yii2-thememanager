<?php

namespace hiqdev\thememanager\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class OrganizationLink extends Widget
{
    public $options = [];

    public function run()
    {
        if (isset(Yii::$app->params['organizationName']) && trim(Yii::$app->params['organizationName'])) {
            if (isset(Yii::$app->params['organizationUrl']) && trim(Yii::$app->params['organizationUrl'])) {
                $out = Html::a(Yii::$app->params['organizationName'], Yii::$app->params['organizationUrl'], $this->options);
            } else {
                $out = Yii::$app->params['organizationName'];
            }
        }

        return isset($out) ? $out : 'Organization';
    }
}

