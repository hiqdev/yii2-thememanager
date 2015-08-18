<?php

use yii\helpers\Html;

$this->title                   = \Yii::t('app', 'Layout Settings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <?php foreach ($this->manager->getItems() as $name => $theme) { ?>
                    <?= Html::a($theme->label, ['change-theme', 'theme' => $name], ['class' => 'btn btn-default']) ?>&nbsp;
                <?php } ?>
            </div>
            <div class="box-body">
                <?= $this->render('//settings/_form', ['model' => $model]); ?>
            </div>
        </div>
    </div>
</div>
