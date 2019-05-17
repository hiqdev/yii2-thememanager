<?php

/** @var \hiam\forms\ChangePasswordForm $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="login-box-body">

    <?php $form = ActiveForm::begin(['id' => 'change-password-form']); ?>

    <?= Html::activeHiddenInput($model, 'login') ?>

    <?= $form->field($model, 'current_password')->passwordInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'new_password')->passwordInput() ?>

    <?= $form->field($model, 'confirm_password')->passwordInput() ?>

    <div class="row">
        <div class="col-xs-12">
            <?= Html::submitButton(Yii::t('hiqdev.thememanager', 'Change password'), ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
