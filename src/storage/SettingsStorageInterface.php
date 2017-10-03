<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\storage;

use yii\base\Model;

/**
 * Interface SettingsStorageInterface.
 */
interface SettingsStorageInterface
{
    /**
     * Sets $model attributes to the user's storage as array.
     *
     * @param Model $model
     * @return mixed
     */
    public function set(Model $model);

    /**
     * @return array Retrieves user's theme settings from the storage as array
     */
    public function get();
}
