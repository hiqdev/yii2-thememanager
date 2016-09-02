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
use yii\helpers\Html;

class SocialLinks extends Widget
{
    public $tag = 'li';

    public $tagOptions = [];

    public function run()
    {
        $out = '';
        foreach (['twitter', 'facebook', 'vk', 'youtube', 'instagram', 'pinterest', 'github'] as $name) {
            $icon = $name === 'github' ? 'github-alt' : $name;
            $link = $name . '_link';
            if (isset(Yii::$app->params[$link]) && Yii::$app->params[$link]) {
                $out .= Html::beginTag($this->tag, $this->tagOptions);
                $out .= Html::a(Html::tag('span', '', ['class' => "fa fa-{$icon}"]), Yii::$app->params[$link], ['title' => ucfirst($name)]);
                $out .= Html::endTag($this->tag);
            }
        }

        return $out;
    }
}
