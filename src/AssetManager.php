<?php

/*
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\thememanager;

use Yii;

/**
 * Asset Manager.
 */
class AssetManager extends \yii\web\AssetManager
{
    /**
     * @var string|AssetConverter
     */
    protected $_ac;

    /**
     * {@inheritdoc}
     */
    public function getConverter()
    {
        if ($this->_ac === null) {
            $this->_ac = Yii::createObject(AssetConverter::className());
        } elseif (is_array($this->_ac) || is_string($this->_ac)) {
            if (is_array($this->_ac) && !isset($this->_ac['class'])) {
                $this->_ac['class'] = AssetConverter::className();
            }
            $this->_ac = Yii::createObject($this->_ac);
        }

        return $this->_ac;
    }

    /**
     * {@inheritdoc}
     */
    public function setConverter($value)
    {
        $this->_ac = $value;
    }
}
