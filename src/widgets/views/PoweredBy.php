<?php

use yii\helpers\Html;

?>
<?php if (!empty($name)) : ?>
    <?php if (!empty($url)) : ?>
        <?= Yii::t('hiqdev.thememanager', 'Powered by') ?> <?= Html::a($name, $url, $options) ?>
    <?php else : ?>
        <?= Yii::t('hiqdev.thememanager', 'Powered by') ?> <?= Html::tag('b', $name, $options) ?>
    <?php endif ?>
    <?php if (!empty($version)) : ?>
        <?= Yii::t('hiqdev.thememanager', 'version') ?> <?= $version ?>
    <?php endif ?>
<?php else : ?>
    <?= Yii::powered() ?>
<?php endif ?>
