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

use Yii;
use yii\base\Component;
use yii\base\Model;

class SessionSettingsStorage extends Component implements SettingsStorageInterface
{
    /**
     * @var string
     */
    public $sessionKey = 'themeManger.themeSettings';

    /**
     * @param Model $model the settings model
     */
    public function set(Model $model)
    {
        $data = $model->toArray();
        Yii::$app->session->set($this->sessionKey, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return Yii::$app->session->get($this->sessionKey);
    }
}
