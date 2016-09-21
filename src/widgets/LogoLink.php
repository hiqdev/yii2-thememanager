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
use yii\base\NotSupportedException;

/**
 * LogoLink widget.
 */
class LogoLink extends Widget
{
    /**
     * @var array html options.
     */
    public $options = [];

    /**
     * @var string url to image.
     */
    public $image;

    /**
     * @var string text to display.
     */
    public $name;

    /**
     * @var array|string text to display.
     */
    public $url;

    public function run()
    {
        if (!empty($this->image)) {
            throw new NotSupportedException('logo image is not implemented yet');
        }

        return $this->render('LogoLink', [
            'image'   => $this->image,
            'name'    => $this->name,
            'url'     => $this->url,
            'options' => $this->options,
        ]);
    }
}