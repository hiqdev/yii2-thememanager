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

/**
 * PoweredBy widget.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class PoweredBy extends Widget
{
    /**
     * @var string|array url to empowerer
     */
    public $url;

    /**
     * @var string name to display
     */
    public $name;

    /**
     * @var string version to display if given
     */
    public $version;

    /**
     * @var array html options
     */
    public $options = [];

    public function run()
    {
        return $this->render('PoweredBy', [
            'url'     => $this->url,
            'name'    => $this->name,
            'version' => $this->version,
            'options' => $this->options,
        ]);
    }
}
