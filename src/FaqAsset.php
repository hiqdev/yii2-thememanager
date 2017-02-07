<?php

namespace hiqdev\themes\dataserv;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class FaqAsset extends AssetBundle
{
    public $sourcePath = '@hiqdev/themes/dataserv/assets/faq';

    public $js = [
        YII_ENV_PROD ? 'js/faq.min.js' : 'js/faq.js',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}
