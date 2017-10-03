<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

use Yii;

/**
 * LoginForm widget - renders login complex login form.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class LoginForm extends \yii\base\Widget
{
    public $model;
    public $options = [];

    public $shows = [];
    public $pages = [];
    public $texts = [];
    public $disables = [];

    protected $_textAttributes;
    protected $_boolAttributes;
    protected $_defaultTexts;

    public function init()
    {
        parent::init();
        $defaults = ['id' => 'login-form'];
        if (!empty($this->options['validationUrl'])) {
            $defaults['enableAjaxValidation'] = true;
        }
        $this->options = array_merge($defaults, $this->options);
    }

    public function run()
    {
        return $this->render('LoginForm', [
            'model' => $this->model,
            'widget' => $this,
        ]);
    }

    public function isShown($action)
    {
        return empty($this->disables[$action]) && !empty($this->shows[$action]);
    }

    public function getPage($action)
    {
        return $this->isShown($action) ? $this->buildPage($this->getPageBase($action)) : null;
    }

    public function getPageBase($action)
    {
        return isset($this->pages[$action]) ? $this->pages[$action] : $action;
    }

    protected function buildPage($page)
    {
        if (!$page) {
            return null;
        }
        if (!is_array($page)) {
            $page = [$page];
        }
        if (!isset($page['username']) && isset($this->model->username)) {
            $page['username'] = $this->model->username;
        }

        return $page;
    }

    public function getText($action)
    {
        return isset($this->texts[$action]) ? $this->texts[$action] : $this->getDefaultText($action);
    }

    public function getDefaultText($action)
    {
        if ($action === 'header' || $action === 'button') {
            return Yii::$app->view->title;
        }
        if (empty($this->_defaultTexts)) {
            $this->_defaultTexts = $this->defaultTexts();
        }

        return isset($this->_defaultTexts[$action]) ? $this->_defaultTexts[$action] : null;
    }

    public function defaultTexts()
    {
        return [
            'restore-password' => Yii::t('hiqdev.thememanager', 'I forgot my password'),
            'signup' => Yii::t('hiqdev.thememanager', 'Register a new membership'),
            'login' => Yii::t('hiqdev.thememanager', 'I already have a membership'),
        ];
    }

    public function detectInputIcon($name)
    {
        static $marks = [
            'old_password'      => 'lock',
            'password'          => 'lock',
            'password_retype'   => 'sign-in',
            'username'          => 'envelope',
            'email'             => 'envelope',
            'first_name'        => 'user',
            'last_name'         => 'user',
        ];

        return isset($marks[$name]) ? $marks[$name] : '';
    }

    public function detectInputType($name)
    {
        return strpos($name, 'password') === false ? 'text' : 'password';
    }

    public function getTextAttributes()
    {
        if ($this->_textAttributes === null) {
            $this->_textAttributes = [];
            $bools = $this->getBoolAttributes();
            foreach ($this->model->activeAttributes() as $attribute) {
                if (empty($bools[$attribute])) {
                    $this->_textAttributes[$attribute] = $attribute;
                }
            }
        }

        return $this->_textAttributes;
    }

    public function getBoolAttributes()
    {
        if ($this->_boolAttributes === null) {
            $this->_boolAttributes = [];
            foreach ($this->model->rules() as $rule) {
                if ($rule[1] === 'boolean') {
                    $attributes = (array) $rule[0];
                    foreach ($attributes as $attribute) {
                        $this->_boolAttributes[$attribute] = $attribute;
                    }
                }
            }
        }

        return $this->_boolAttributes;
    }

    public function getBoolAttribute()
    {
        return reset($this->getBoolAttributes());
    }
}
