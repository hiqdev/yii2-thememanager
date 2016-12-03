<?php
/**
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

use yii\helpers\Html;

class SocialLinks extends \yii\base\Widget
{
    public $tag = 'li';

    public $tagOptions = [];

    public $links = [];

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
                $out .= Html::a(Html::tag('span', '', ['class' => "fa fa-{$icon}"]), $value, ['title' => ucfirst($name)]);
                $out .= Html::endTag($this->tag);
            }
        }

        return $out;
    }
}
