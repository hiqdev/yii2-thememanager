<?php

namespace hiqdev\thememanager\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class OrganizationLink extends Widget
{
    public $linkOptions = [];

    public function run()
    {
        if (isset(Yii::$app->params['organizationUrl']) && trim(Yii::$app->params['organizationUrl']) != '') {
            $out = Html::a(Yii::$app->params['organizationName'], Yii::$app->params['organizationUrl'], $this->linkOptions);
        } else {
            $out = Yii::$app->params['orgName'];
        }

        return $out;
    }
}

