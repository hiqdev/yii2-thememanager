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

use Yii;
use yii\base\Widget;

class CopyrightYears extends Widget
{
    public function run()
    {
        if (isset(Yii::$app->params['copyrightYears'])) {
            $years = Yii::$app->params['copyrightYears'];
        } elseif (isset(Yii::$app->params['copyrightYear'])) {
            $years = Yii::$app->params['copyrightYear'] . '-' . date('Y');
        }

        return isset($years) ? $years : date('Y');
    }
}
