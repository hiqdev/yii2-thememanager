<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\models;

class Settings extends \yii\base\Model implements OrientationInterface
{
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

    public function load($data = null, $formName = '')
    {
        parent::load($data, $formName);
        foreach ($this->_defaults as $k => $v) {
            if (is_null($this->$k)) {
                $this->$k = $v;
            }
        }

        return true;
    }

    /**
     * Default css provider - returns plain value, fits for attributes like skin and layout.
     * @param $name  string         attribute name
     * @param $value boolean|string attribute value
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
        $classes = [];

        foreach ($names as $n) {
            $classes[$n] = $this->getCssClass($n);
        }

        return implode(' ', array_filter($classes));
    }
}
