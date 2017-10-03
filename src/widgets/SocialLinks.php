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

use yii\helpers\Html;

/**
 * SocialLinks widget.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class SocialLinks extends \yii\base\Widget
{
    public $tag = 'li';

    public $tagOptions = [];

    public $links = [];

    public $linkOptions = [];

    public $icons = [
        'github' => 'github-alt',
        'email'  => 'envelope',
    ];

    public function run()
    {
        $out = '';
        foreach ($this->links as $name => $value) {
            if ($value) {
                $icon = isset($this->icons[$name]) ? $this->icons[$name] : $name;
                $out .= Html::beginTag($this->tag, $this->tagOptions);
                $out .= Html::a(Html::tag('span', '', ['class' => "fa fa-{$icon}"]), $value, array_merge(['title' => ucfirst($name)], $this->linkOptions));
                $out .= Html::endTag($this->tag);
            }
        }

        return $out;
    }
}
