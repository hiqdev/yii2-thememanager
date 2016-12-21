<?php

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
     * Renders menu with given widget config.
     * @param mixed $config
     * @return string rendered menu
     */
    public function widget($config = []);
}
