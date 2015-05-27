<?php
/**
 * @link    http://hiqdev.com/yii2-thememanager
 * @license http://hiqdev.com/yii2-thememanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\thememanager;

use Yii;
use yii\base\BootstrapInterface;
use hiqdev\thememanager\models\Settings;

/**
 * Theme Manager
 *
 * Usage, in config:
 * ~~~
 * 'components' => [
 *     'themeManager' => [
 *         'class' => 'hiqdev\thememanager\Manager',
 *     ],
 * ]
 * ~~~
 * That's it, nothing more.
 */
class Manager extends \hiqdev\collection\Manager implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    protected $_itemClass = 'hiqdev\thememanager\Theme';

    /**
     * @var string default theme name
     */
    public $defaultTheme;

    /**
     * @var Theme current theme object
     */
    private $_theme;

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
        Yii::$app->view->theme = $this->_theme;
    }

    public function getTheme()
    {
        return $this->_theme;
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

        $app->pluginManager->bootstrap($app);
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
        $this->_isBootstrapped = true;
    }

}
