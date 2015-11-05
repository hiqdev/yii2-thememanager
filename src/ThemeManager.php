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

use hiqdev\thememanager\models\Settings;
use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\base\InvalidConfigException;
use yii\caching\Dependency;
use yii\caching\FileDependency;
use yii\web\AssetBundle;

/**
 * Theme Manager.
 *
 * Usage, in config:
 * ~~~
 * 'components' => [
 *     'themeManager' => [
 *         'class' => 'hiqdev\thememanager\ThemeManager',
 *         'cacheDuration' => false // disable caching
 *     ],
 * ]
 * ~~~
 * That's it, nothing more.
 */
class ThemeManager extends \hiqdev\collection\Manager implements BootstrapInterface
{
    /**
     * @var int|boolean the duration of caching in seconds
     * When false - caching is disabled.
     * Defaults to 3600.
     */
    public $cacheDuration = 3600;

    /**
     * {@inheritdoc}
     */
    protected $_itemClass = 'hiqdev\thememanager\Theme';

    /**
     * @var string default theme name
     */
    protected $_defaultTheme;

    /**
     * Sets the default theme name.
     *
     * @param string $theme default theme name.
     */
    public function setDefaultTheme($theme)
    {
        $this->_defaultTheme = $theme;
    }

    /**
     * Returns the default theme. Returns the first of available themes by default.
     *
     * @return string default theme name.
     */
    public function getDefaultTheme()
    {
        if (!$this->_defaultTheme) {
            $this->_defaultTheme = reset($this->keys());
        }

        return $this->_defaultTheme;
    }

    protected $_view;

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
            $this->_view = Yii::$app->getView();
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
     * @var Theme current theme object
     */
    protected $_theme;

    /**
     * Changes theme.
     *
     * @param string theme name
     *
     * @throws InvalidConfigException
     */
    public function setTheme($name)
    {
        if (!$this->has($name)) {
            throw new InvalidConfigException('unknown theme: ' . $name);
        }
        $this->_theme      = $this->getItem($name);
        $this->view->theme = $this->_theme;
    }

    public function getTheme()
    {
        return $this->_theme;
    }

    public function getSettings()
    {
        return $this->getTheme()->getSettings();
    }

    /**
     * @var array assets of the application
     */
    public $assets = [];

    /**
     * Register all the assets.
     */
    public function registerAssets()
    {
        foreach (array_merge($this->assets, $this->getTheme()->assets) as $asset) {
            /**
             * @var $asset AssetBundle
             */
            $asset::register($this->getView());
        }
    }

    /**
     * @var bool is already bootstrapped.
     */
    protected $_isBootstrapped = false;

    /**
     * {@inheritdoc}
     */
    public function bootstrap($app)
    {
        if ($this->_isBootstrapped) {
            return;
        }
        $this->_isBootstrapped = true;

        Yii::trace('Bootstrap themes', get_called_class() . '::bootstrap');
        $app->pluginManager->bootstrap($app);

        $assetManager = Yii::$app->getComponents(true)['assetManager'];
        if ($assetManager['class'] === Yii::$app->coreComponents()['assetManager']['class']) {
            $assetManager['class'] = 'hiqdev\thememanager\AssetManager';
            Yii::$app->set('assetManager', $assetManager);
        }
        Yii::trace('Loading themes from plugins', get_called_class() . '::bootstrap');

        $this->putItems($app->pluginManager->themes);
        $model = new Settings();
        $model->load();
        $theme = $this->hasItem($model->theme) ? $model->theme : null;
        $theme = $theme ?: $this->getDefaultTheme();
        $this->setTheme($theme);
    }
}
