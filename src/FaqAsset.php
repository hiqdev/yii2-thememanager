<?php

namespace hiqdev\thememanager;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class FaqAsset extends AssetBundle
{
    public $sourcePath = '@hiqdev/thememanager/assets/faq';

    public $css = [
        'css/faq.css',
    ];

    public $js = [
        YII_ENV_PROD ? 'js/faq.min.js' : 'js/faq.js',
    ];

    public $depends = [
        BootstrapAsset::class,
        JqueryAsset::class,
    ];
}
