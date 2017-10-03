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
use yii\helpers\Html;

/**
 * OrganizationLink widget.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class OrganizationLink extends Widget
{
    /**
     * @var string|array url to organization
     */
    public $url;

    /**
     * @var string name to display
     */
    public $name;

    /**
     * @var array html options
     */
    public $options = [];

    public function run()
    {
        return $this->render('OrganizationLink', [
            'url'     => $this->url,
            'name'    => $this->name ?: 'Organization',
            'options' => $this->options,
        ]);
    }
}
