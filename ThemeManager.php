<?php
/**
 * @link    http://hiqdev.com/yii2-thememanager
 * @license http://hiqdev.com/yii2-thememanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\thememanager;

use Yii;
use yii\base\BootstrapInterface;
use yii\base\InvalidConfigException;
use hiqdev\thememanager\models\Settings;

/**
 * Theme Manager
 *
 * Usage, in config:
 * ~~~
 * 'components' => [
 *     'themeManager' => [
 *         'class' => 'hiqdev\thememanager\ThemeManager',
 *     ],
 * ]
 * ~~~
 * That's it, nothing more.
 */
class ThemeManager extends \hiqdev\collection\Manager implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    protected $_itemClass = 'hiqdev\thememanager\Theme';

    /**
     * @var string default theme name
     */
    public $defaultTheme;

    protected $_view;

    /**
     * Returns the view object that can be used to render views or view files.
     * The [[render()]] and [[renderFile()]] methods will use
     * this view object to implement the actual view rendering.
     * If not set, it will default to the "view" application component.
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
     * Sets the view object to be used
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
            throw new InvalidConfigException('unknown theme: '.$name);
        }
        $this->_theme = $this->getItem($name);
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
            $asset::register($this->getView());
        }
    }

    /**
     * @var boolean is already bootstrapped.
     */
    protected $_isBootstrapped = false;

    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        if ($this->_isBootstrapped) {
            return;
        }
        $this->_isBootstrapped = true;
        $app->pluginManager->bootstrap($app);

        $assetManager = Yii::$app->getComponents(true)['assetManager'];
        if ($assetManager['class'] === Yii::$app->coreComponents()['assetManager']['class']) {
            $assetManager['class'] = 'hiqdev\thememanager\AssetManager';
            Yii::$app->set('assetManager', $assetManager);
        }

        $cached = null;
        if ($cached) {
            $this->mset($cached);
        } else {
            $this->putItems($app->pluginManager->themes);
            $model = new Settings;
            $model->load();
            $theme = $model->theme ?: $this->defaultTheme;
            if (!$this->has($theme)) {
                $theme = reset($this->keys());
            }
            $this->setTheme($theme);
            $cached = $this->toArray();
        }
    }

}
