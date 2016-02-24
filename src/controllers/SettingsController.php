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
use Yii;

class SettingsController extends \yii\web\Controller
{
    public function getModel()
    {
        return $this->module->getManager()->getSettings();
    }

    /**
     * Settings form.
     *
     * @return Response
     */
    public function actionIndex()
    {
        $model = $this->getModel();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Layout settings saved.');
            } else {
                Yii::$app->session->setFlash('error', 'Layout settings not saved.');
            }
        } else {
            $model->load();
        }
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('//settings/_form', compact('model'));
        }
        return $this->render('index', compact('model'));
    }

    public function actionChangeTheme($theme)
    {
        if ($this->module->getManager()->has($theme)) {
            $model        = $this->getModel();
            $model->theme = $theme;
            $model->save();
        }

        return $this->redirect(['index']);
    }

    public function actionCollapsedSidebar()
    {
        if (Yii::$app->request->isAjax) {
            $model                    = $this->getModel();
            $model->collapsed_sidebar = Yii::$app->request->post('collapsed_sidebar');
            $model->save();
        }
    }
}
