<?php

/*
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\controllers;

use hiqdev\thememanager\models\Settings;
use hiqdev\thememanager\Module;
use hiqdev\thememanager\storage\SettingsStorageInterface;
use hiqdev\thememanager\ThemeManager;
use Yii;
use yii\base\DynamicModel;
use yii\web\Response;

class SettingsController extends \yii\web\Controller
{
    /**
     * @var Module
     */
    public $module;

    /**
     * @return Settings
     */
    public function getModel()
    {
        return $this->module->getManager()->getSettings();
    }

    /**
     * @return SettingsStorageInterface
     */
    public function getSettingsStorage()
    {
        return Yii::$app->get('themeSettingsStorage');
    }

    /**
     * Settings form
     *
     * @return Response
     */
    public function actionIndex()
    {
        $model = $this->getModel();

        $data = Yii::$app->request->post($model->formName());
        if (empty($data)) {
            $data = $this->getSettingsStorage()->get();
        }

        if (Yii::$app->request->getIsPost() && $model->load($data) && $model->validate()) {
            $this->getSettingsStorage()->set($model);
            Yii::$app->session->setFlash('success', 'Layout settings saved.');
        }

        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('//settings/_form', compact('model'));
        }

        return $this->render('index', compact('model'));
    }

    /**
     * @param $theme
     * @return Response
     */
    public function actionChangeTheme($theme)
    {
        if ($this->module->getManager()->has($theme)) {
            $model = $this->getModel();
            $model->theme = $theme;
            $this->getSettingsStorage()->set($model);
            Yii::$app->session->setFlash('success', 'Theme changed');
        }

        return $this->redirect(['index']);
    }

    public function actionCollapsedSidebar()
    {
        if (Yii::$app->request->isAjax) {
            $model = $this->getModel();
            $model->collapsed_sidebar = Yii::$app->request->post('collapsed_sidebar');
            $this->getSettingsStorage()->set($model);
        }
    }
}
