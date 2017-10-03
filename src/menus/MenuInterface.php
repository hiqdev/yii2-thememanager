<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\menus;

/**
 * Menu interface.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
interface MenuInterface
{
    /**
     * Creates menu object with given config.
     * @param mixed $config
     * @return MenuInterface
     */
    public static function create($config = []);

    /**
     * Creates menu and renders with given configs.
     * @param mixed $menuConfig
     * @param mixed $widgetConfig
     * @return string rendered menu
     */
    public static function widget($menuConfig = [], $widgetConfig = []);

    /**
     * Renders menu with given widget config.
     * @param mixed $config widget config
     * @return string rendered menu
     */
    public function run($config = []);
}
