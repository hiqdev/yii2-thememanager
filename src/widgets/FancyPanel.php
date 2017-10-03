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

use yii\base\Widget;
use yii\helpers\ArrayHelper;

/**
 * FancyPanel widget.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class FancyPanel extends Widget
{
    public $panelClass = 'contactmethod';

    /**
     * Example: darkgray|blue|green|purple.
     *
     * @var string
     */
    public $color = 'darkgray';

    public $title;

    public $content;

    public function init()
    {
        ob_start();
        ob_implicit_flush(false);
    }

    public function run()
    {
        $this->content = ob_get_clean();

        return $this->render('FancyPanel', ArrayHelper::toArray($this));
    }
}
