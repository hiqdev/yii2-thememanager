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

use ReflectionClass;
use Yii;

/**
 * Menu is a manageable collection of child [[Menu]]s.
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
     * @var array assets to be registered for this theme
     */
    public $assets = [];

    private $_manager;

    /**
     * Returns the manager object that can be used to render views or view files.
     * If not set, it will default to the "themeManager" application component.
     *
     * @return Manager the manager object
     */
    public function getManager()
    {
        if ($this->_manager === null) {
            $this->_manager = Yii::$app->get('themeManager');
        }

        return $this->_manager;
    }

    /**
     * Sets the manager object to be used by this theme.
     *
     * @param Manager $manager the manager object.
     */
    public function setManager($manager)
    {
        $this->_manager = $manager;
    }

    private $_view;

    /**
     * Returns the view object that can be used to render views or view files.
     * The [[render()]] and [[renderFile()]] methods will use
     * this view object to implement the actual view rendering.
     * If not set, it will default to the "view" application component.
     *
     * @return \yii\web\View the view object that can be used to render views or view files.
     */
    public function getView()
    {
        if ($this->_view === null) {
            $this->_view = $this->getManager()->getView();
        }

        return $this->_view;
    }

    /**
     * Sets the view object to be used.
     *
     * @param View $view the view object that can be used to render views or view files.
     */
    public function setView($view)
    {
        $this->_view = $view;
    }

    /**
     * Getter for pathMap.
     */
    public function init()
    {
        parent::init();
        if (!$this->pathMap) {
            $dirs          = $this->calcPathDirs();
            $this->pathMap = [
                '@app/views'   => $this->buildPathes($dirs, 'views'),
                '@app/widgets' => $this->buildPathes($dirs, 'widgets'),
            ];
        }
    }

    public function calcPathDirs()
    {
        $ref = $this->getReflection();
        for ($depth = 0;$depth < 10;++$depth) {
            $dirs[] = dirname($ref->getFilename());
            $ref    = $ref->getParentClass();
            if (__CLASS__ === $ref->name) {
                break;
            }
        }

        return $dirs;
    }

    public function buildPathes($dirs, $name)
    {
        foreach ($dirs as $dir) {
            $res[] = $dir . DIRECTORY_SEPARATOR . $name;
        }

        return $res;
    }

    protected $_baseUrl;

    /**
     * @return string the base URL (without ending slash) for this theme.
     *                All resources of this theme are considered to be under this base URL.
     */
    public function getBaseUrl()
    {
        if (!$this->_baseUrl) {
            $this->_baseUrl = '@web/themes/' . $this->name;
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
                $this->_settings = static::findSettingsClass(get_called_class());
            }
            $this->_settings = Yii::createObject($this->_settings);
            $this->_settings->load();
        }

        return $this->_settings;
    }

    public static function calcSettingsClass($class)
    {
        return substr($class, 0, strrpos($class, '\\')) . '\\models\\Settings';
    }

    public static function findSettingsClass($class)
    {
        $res = static::calcSettingsClass($class);

        return class_exists($res) ? $res : static::findSettingsClass(get_parent_class($class));
    }
}
