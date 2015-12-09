<?php

/*
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\thememanager\models;

use Yii;

class Settings extends \yii\base\Model
{
    /**
     * @var string name of variable to save theme settings
     */
    public $varName = 'theme_settings';

    /**
     * @var string theme name
     */
    public $theme;

    public function rules()
    {
        return [
            [['theme'], 'safe'],
        ];
    }

    /**
     * @var array default values for attributes
     */
    protected $_defaults = [];

    /**
     * @return bool
     */
    public function save()
    {
        Yii::$app->session->set($this->varName, $this->getAttributes());

        return true;
    }

    public function load($data = null, $formName = null)
    {
        if (is_null($data)) {
            $data = [$this->formName() => Yii::$app->session->get($this->varName)];
        }
        if (!$data) {
            return false;
        }
        parent::load($data);
        foreach ($this->_defaults as $k => $v) {
            if (is_null($this->$k)) {
                $this->$k = $v;
            }
        }

        return true;
    }

    /**
     * Default css provider - returns plain value, fits for attributes like skin and layout.
     *
     * @param $name  string         attribute name
     * @param $value boolean|string attribute value
     *
     * @return string css class
     */
    public static function cssClassProvider($name, $value)
    {
        return $value;
    }

    public function getCssClass($name)
    {
        return static::cssClassProvider($name, $this->$name);
    }

    public function getCssClasses(array $names)
    {
        foreach ($names as $n) {
            $classes[$n] = $this->getCssClass($n);
        }

        return implode(' ', array_filter($classes));
    }
}
