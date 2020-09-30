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
use yii\helpers\Html;

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
        if ($this->isImage()) {
            return $this->renderImage($this->image, $this->imageOptions);
        }

        if ($this->isSmallImage()) {
            return $this->renderImage($this->smallImage, $this->smallImageOptions);
        }

        return Html::a($this->name, $this->url, $this->options);
    }

    private function isImage(): bool
    {
        return !empty($this->image);
    }

    private function isSmallImage(): bool
    {
        return !empty($this->smallImage);
    }

    private function renderImage(string $image, array $imageOptions): string
    {
        return Html::beginTag('a', array_merge(['href' => $this->url, 'class' => 'logo'], $this->options))
                . Html::img($this->getImage($image), $imageOptions)
                . Html::endTag('a');
    }

    protected function getImage($path)
    {
        return mb_substr($path, 0, 1, 'utf-8') === '@' ? Yii::$app->assetManager->publish($path)[1] : $path;
    }
}
