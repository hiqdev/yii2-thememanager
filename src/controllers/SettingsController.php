<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\controllers;

use hipanel\models\IndexPageUiOptions;
use hiqdev\thememanager\models\Settings;
use hiqdev\thememanager\Module;
use hiqdev\thememanager\storage\SettingsStorageInterface;
use Yii;
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
    public function getThemeSettingsStorage()
    {
        return Yii::$app->get('themeSettingsStorage');
    }

    public function getUiOptionsStorage()
    {
        return Yii::$app->get('uiOptionsStorage');
    }

    /**
     * Settings form.
     *
     * @return string|Response
     */
    public function actionIndex()
    {
        $model = $this->getModel();

        $data = Yii::$app->request->post($model->formName());
        if (empty($data)) {
            $data = $this->getThemeSettingsStorage()->get();
        }

        if (Yii::$app->request->getIsPost() && $model->load($data) && $model->validate()) {
            $this->getThemeSettingsStorage()->set($model);
            $this->setGlobalOrientation($model->filterOrientation);
            Yii::$app->session->setFlash('success', Yii::t('hiqdev.thememanager', 'Layout settings saved.'));
        }

        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('//settings/_form', compact('model'));
        }

        return $this->render('index', compact('model'));
    }

    /**
     * @param null $orientation
     */
    public function setGlobalOrientation($orientation = null)
    {
        if ($orientation !== null) {
            $settings = $this->getUiOptionsStorage()->getAllUiOptions();
            foreach ($settings as $route => $data) {
                $model = new IndexPageUiOptions($data);
                $model->orientation = $orientation;
                if ($model->validate()) {
                    $this->getUiOptionsStorage()->set($route, $model->toArray());
                } else {
                    Yii::warning('SettingsController - IndexPageUiModel validation errors: ' . json_encode($model->getErrors()));
                }
            }
        }
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
            $this->getThemeSettingsStorage()->set($model);
            Yii::$app->session->setFlash('success', Yii::t('hiqdev.thememanager', 'Theme changed'));
        }

        return $this->redirect(['index']);
    }

    public function actionCollapsedSidebar()
    {
        if (Yii::$app->request->isAjax) {
            $model = $this->getModel();
            $model->collapsed_sidebar = Yii::$app->request->post('collapsed_sidebar');
            $this->getThemeSettingsStorage()->set($model);
        }
    }
}
