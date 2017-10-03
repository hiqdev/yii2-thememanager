<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

use Yii;
use yii\base\Widget;

/**
 * LogoLink widget.
 * @author Andrii Vasyliev <sol@hiqdev.com>
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

    public $smallImage;

    public $imageOptions = [];

    public $smallImageOptions = [];

    public function run()
    {
        return $this->render('LogoLink', $this->collectData());
    }

    protected function collectData()
    {
        $data = [
            'name' => $this->name,
            'url' => $this->url,
            'options' => $this->options,
        ];
        if ($this->smallImage) {
            $data['smallImage'] = $this->getImage($this->smallImage);
            $data['smallImageOptions'] = $this->smallImageOptions;
        }
        if ($this->image) {
            $data['image'] = $this->getImage($this->image);
            $data['imageOptions'] = $this->imageOptions;
        }

        return $data;
    }

    protected function getImage($path)
    {
        return mb_substr($path, 0, 1, 'utf-8') === '@' ? Yii::$app->assetManager->publish($path)[1] : $path;
    }
}
