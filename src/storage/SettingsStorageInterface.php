<?php

namespace hiqdev\thememanager\storage;

use yii\base\Model;

/**
 * Interface SettingsStorageInterface
 *
 * @package hiqdev\thememanager\storage
 */
interface SettingsStorageInterface
{
    /**
     * Sets $model attributes to the user's storage as array
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
