<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager;

use hiqdev\thememanager\models\Settings;
use hiqdev\thememanager\storage\SettingsStorageInterface;
use Yii;
use yii\base\InvalidConfigException;
use yii\web\AssetBundle;
use yii\web\Controller;
use yii\web\Request;

/**
 * Theme Manager. Provides:.
 *
 * - theme initialization
 * - pathMap building
 *
 * Usage, in config:
 *
 * ```php
 * 'components' => [
 *     'themeManager' => [
 *         'class' => \hiqdev\thememanager\ThemeManager::class,
 *     ],
 * ]
 * ```
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class ThemeManager extends \hiqdev\yii2\collection\Manager implements \yii\base\BootstrapInterface
{
    /**
     * @var array basic pathMap for all themes, will be merged with theme own pathMap
     */
    public $pathMap = [];

    /**
     * {@inheritdoc}
     */
    protected $_itemClass = Theme::class;

    /**
     * @var string default theme name
     */
    protected $_defaultTheme;

    /**
     * Sets the default theme name.
     *
     * @param string $theme default theme name
     */
    public function setDefaultTheme($theme)
    {
        $this->_defaultTheme = $theme;
    }

    /**
     * Returns the default theme. Returns the first of available themes by default.
     *
     * @return string default theme name
     */
    public function getDefaultTheme()
    {
        if (!$this->_defaultTheme) {
            $keys = $this->keys(); /// shame to PHP it can't be done in single line :(
            $this->_defaultTheme = reset($keys);
        }

        return $this->_defaultTheme;
    }

    protected $_view;

    /**
     * @return \yii\web\View
     * @see setView
     */
    public function getView()
    {
        if ($this->_view === null) {
            $this->_view = Yii::$app->getView();
        }

        return $this->_view;
    }

    /**
     * You can change the View for theme manager.
     * @param \yii\web\View $view the view object that will be used to render views or view files
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
     * @param string theme name
     * @throws InvalidConfigException
     */
    public function setTheme($name)
    {
        if (!$name) {
            throw new InvalidConfigException('no theme to set');
        }
        $this->_theme = $name;
    }

    public function getTheme()
    {
        if (is_string($this->_theme)) {
            if (!$this->has($this->_theme)) {
                throw new InvalidConfigException('unknown theme: ' . $this->_theme);
            }
            $this->_theme = $this->getItem($this->_theme);
            $this->getView()->theme = $this->_theme;
        }

        return $this->_theme;
    }

    public function getSettings()
    {
        return $this->getTheme()->getSettings();
    }

    /**
     * @return bool
     */
    public static function isHomePage()
    {
        // todo: if route is change during the request processing the result will be outdated
        static $result = null;

        if ($result === null) {
            /** @var Controller $controller */
            $actualRoute = Yii::$app->controller->getRoute();

            list($controller, $actionId) = Yii::$app->createController('');
            $actionId = !empty($actionId) ? $actionId : $controller->defaultAction;
            $defaultRoute = $controller->getUniqueId() . '/' . $actionId;

            $result = $actualRoute === $defaultRoute;
        }

        return $result;
    }

    /**
     * @var AssetBundle[] assets to be registered at bootstrap
     */
    public $assets = [];

    /**
     * Register all the assets.
     */
    public function registerAssets()
    {
        foreach (array_merge($this->assets, $this->getTheme()->assets) as $asset) {
            /** @var AssetBundle $asset */
            $asset::register($this->getView());
        }
    }

    /**
     * @var bool is already bootstrapped
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

        $data = $this->getSettingsStorage()->get();
        $model = new Settings();
        $model->load($data);
        $theme = $this->hasItem($model->theme) ? $model->theme : null;
        $theme = $theme ?: $this->getDefaultTheme();
        $this->setTheme($theme);
        $this->getTheme();
    }

    /**
     * @return SettingsStorageInterface
     */
    public function getSettingsStorage()
    {
        return Yii::$app->get('themeSettingsStorage');
    }

    /**
     * @return array
     */
    public function getThemeSettings()
    {
        return $this->getSettingsStorage()->get();
    }
}
