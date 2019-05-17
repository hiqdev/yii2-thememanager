<?php

/** @var \hiam\forms\ChangeEmailForm $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="login-box-body">

    <?php $form = ActiveForm::begin(['id' => 'change-email-form']); ?>

    <?= Html::activeHiddenInput($model, 'login') ?>

    <?= Html::activeHiddenInput($model, 'seller_id') ?>

    <?= $form->field($model, 'email')->input('email', ['autofocus' => true, 'placeholder' => Yii::t('hiqdev.thememanager', 'Enter new email')]) ?>

    <div class="row">
        <div class="col-xs-12">
            <?= Html::submitButton(Yii::t('hiqdev.thememanager', 'Change email'), ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
