<?php

namespace hiqdev\thememanager\controllers;

use Yii;
use hiqdev\thememanager\models\Settings;

class SettingsController extends \yii\web\Controller
{
    public function getModel()
    {
        return $this->module->getManager()->getSettings();
    }

    /**
     * Settings form
     *
     * @return Response
     */
    public function actionIndex() {
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
        return $this->render('index', compact('model'));
    }

    public function actionChangeTheme($theme) {
        if ($this->module->getManager()->has($theme)) {
            $model = $this->getModel();
            $model->theme = $theme;
            $model->save();
        }
        return $this->redirect(['index']);
    }

    public function actionCollapsedSidebar()
    {
        if (Yii::$app->request->isAjax) {
            $model = $this->getModel();
            $model->collapsed_sidebar = Yii::$app->request->post('collapsed_sidebar');
            $model->save();
        }
    }
}
