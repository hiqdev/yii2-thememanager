<?php

/*
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager;

use Yii;

trait GetManagerTrait
{
    protected $_manager = 'themeManager';

    /**
     * Setter for manager.
     *
     * @var string|Manager component name of the theme manager object
     */
    public function setManager($manager)
    {
        $this->_manager = $manager;
    }

    /**
     * Getter for manager.
     */
    public function getManager()
    {
        if (!is_object($this->_manager)) {
            $this->_manager = Yii::$app->get($this->_manager);
        }

        return $this->_manager;
    }
}
