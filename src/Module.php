<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager;

class Module extends \yii\base\Module
{
    use GetManagerTrait;

    /**
     * @return bool
     */
    public function isHomePage()
    {
        return $this->getManager()->isHomePage();
    }
}
