<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\debug;

use Yii;
use yii\base\ViewContextInterface;
use yii\helpers\ArrayHelper;

class Panel extends \yii\debug\Panel implements ViewContextInterface
{
    use \hiqdev\thememanager\GetManagerTrait;

    protected $_viewPath;

    public function setViewPath($value)
    {
        $this->_viewPath = $value;
    }

    public function getViewPath()
    {
        if ($this->_viewPath === null) {
            $this->_viewPath = dirname(__DIR__) . '/views/debug';
        }

        return $this->_viewPath;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Themes';
    }

    /**
     * {@inheritdoc}
     */
    public function getSummary()
    {
        return Yii::$app->view->render('summary', ['panel' => $this], $this);
    }

    /**
     * {@inheritdoc}
     */
    public function getDetail()
    {
        return Yii::$app->view->render('detail', ['panel' => $this], $this);
    }

    public function getThemes()
    {
        return isset($this->data['themes']) ? $this->data['themes'] : [];
    }

    public function getCount()
    {
        return count($this->getThemes());
    }

    public function getCurrent()
    {
        return isset($this->data['current']) ? $this->data['current'] : '';
    }

    public function getDefault()
    {
        return isset($this->data['default']) ? $this->data['default'] : '';
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $raw = $this->getManager()->getItems();
        $themes = ArrayHelper::toArray($raw);
        foreach ($raw as $name => $theme) {
            $themes[$name]['class'] = get_class($theme);
        }

        return [
            'themes' => $themes,
            'current' => $this->getManager()->getTheme()->name,
            'default' => $this->getManager()->getDefaultTheme(),
        ];
    }
}
