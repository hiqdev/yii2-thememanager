<?php

namespace hiqdev\thememanager\menus;

interface MenuInterface
{
    /**
     * Creates menu object.
     * @param mixed $config
     * @return MenuInterface
     */
    public static function create($config = []);

    /**
     * Renders menu with given options.
     */
    public function render($options = []);
}

