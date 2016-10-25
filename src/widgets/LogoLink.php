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

/**
 * LogoLink widget.
 */
class LogoLink extends Widget
{
    /**
     * @var array html options
     */
    public $options = [];

    /**
     * @var string url to image
     */
    public $image;

    /**
     * @var string text to display
     */
    public $name;

    /**
     * @var array|string text to display
     */
    public $url;

    public function run()
    {
        $data = [
            'name'    => $this->name,
            'url'     => $this->url,
            'options' => $this->options,
        ];
        if ($this->image) {
            $data['image'] = Yii::$app->assetManager->publish($this->image)[1];
        }

        return $this->render('LogoLink', $data);
    }
}
