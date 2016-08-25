<?php

namespace hiqdev\thememanager\widgets;

use Yii;
use yii\base\Widget;

class OrganizationLink extends Widget
{

    public function run()
    {
        /// XXX build link to organizationUrl
        /// XXX to be changed to organizationName
        return Yii::$app->params['orgName'];
    }

}

