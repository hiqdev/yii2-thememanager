<?php

/*
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

use yii\base\Widget;

class LoginForm extends Widget
{
    public $model;

    public $options = [];

    public $_signupPage = '/site/signup';
    public $_restorePasswordPage = '/site/restore-password';

    public function run()
    {
        return $this->render('LoginForm', [
            'model' => $this->model,
            'options' => $this->options,
            'signupPage' => $this->signupPage,
            'restorePasswordPage' => $this->restorePasswordPage,
        ]);
    }

    public function setSignupPage($value)
    {
        $this->_signupPage = $value;
    }

    public function setRestorePasswordPage($value)
    {
        $this->_restorePasswordPage = $value;
    }

    public function getSignupPage()
    {
        return $this->buildPage($this->_signupPage);
    }

    public function getRestorePasswordPage()
    {
        return $this->buildPage($this->_restorePasswordPage);
    }

    public function buildPage($page)
    {
        if (!$page) {
            return null;
        }
        if (!is_array($page)) {
            $page = [$page];
        }
        if (!isset($page['username'])) {
            $page['username'] = $this->model->username;
        }

        return $page;
    }
}
