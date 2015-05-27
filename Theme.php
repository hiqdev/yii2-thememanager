<?php
/**
 * @link    http://hiqdev.com/yii2-thememanager
 * @license http://hiqdev.com/yii2-thememanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\thememanager;

use Yii;
use ReflectionClass;

/**
 * Menu is a manageable collection of child [[Menu]]s
 */
class Theme extends \yii\base\Theme implements \hiqdev\collection\ItemWithNameInterface
{

    /**
     * @var string theme name
     */
    public $name;

    /**
     * @var string theme label
     */
    public $label;

    /**
     * Getter for pathMap
     */
    public function init()
    {
        parent::init();
        if (!$this->pathMap) {
            $dirs = $this->calcPathDirs();
            $this->pathMap = [
                '@app/views'    => $this->buildPathes($dirs, 'views'),
                '@app/widgets'  => $this->buildPathes($dirs, 'widgets'),
            ];
        }
    }

    public function calcPathDirs()
    {
        $ref = $this->getReflection();
        for ($depth=0;$depth<10;$depth++) {
            $dirs[] = dirname($ref->getFilename());
            $ref = $ref->getParentClass();
            if (__CLASS__ === $ref->name) {
                break;
            }
        }
        return $dirs;
    }

    public function buildPathes($dirs,$name)
    {
        foreach ($dirs as $dir) {
            $res[] = $dir . DIRECTORY_SEPARATOR . $name;
        }
        return $res;
    }

    protected $_baseUrl;

    /**
     * @return string the base URL (without ending slash) for this theme.
     * All resources of this theme are considered to be under this base URL.
     */
    public function getBaseUrl()
    {
        if (!$this->_baseUrl) {
            $this->_baseUrl = '@web/themes/'.$this->name;
        }

        return $this->_baseUrl;
    }

    protected $_reflection;

    public function getReflection()
    {
        if (!$this->_reflection) {
            $this->_reflection = new ReflectionClass($this);
        }

        return $this->_reflection;
    }

    private $_settings;

    /**
     * @param $settings string theme settings model class name
     */
    public function setSettings($settings)
    {
        $this->_settings = $settings;
    }

    public function getSettings()
    {
        if (!is_object($this->_settings)) {
            if (!$this->_settings) {
                $class = static::calcSettingsClass(get_called_class());
                $this->_settings = class_exists($class) ? $class : static::calcSettingsClass(get_parent_class($this));
            }
            $this->_settings = Yii::createObject($this->_settings);
            $this->_settings->load();
        }

        return $this->_settings;
    }

    static public function calcSettingsClass($class)
    {
        return substr($class, 0, strrpos($class, '\\')) . '\\models\\Settings';
    }

    public function getBodyClasses()
    {
        return $this->getSettings()->getBodyClasses();
    }
}
