<?php
/**
 * @link    http://hiqdev.com/yii2-thememanager
 * @license http://hiqdev.com/yii2-thememanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\thememanager;

use Yii;
use yii\base\BootstrapInterface;
use yii\helpers\StringHelper;

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
     * @var string default skin name
     */
    public $defaultSkin;

    /**
     * @var Theme current theme object
     */
    public $theme;

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
        $this->theme = $this->getItem($name);
        Yii::$app->view->theme = $this->theme;
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
            $app->themeManager->mset($cached);
        } else {
            $this->putItems($app->pluginManager->themes);
            $theme = Yii::$app->session->get('user.theme', $this->defaultTheme);
            if (!$this->has($theme)) {
                $theme = reset($this->keys());
            }
            $this->setTheme($theme);
            $cached = $this->toArray();
        }
        $this->_isBootstrapped = true;
    }
}
