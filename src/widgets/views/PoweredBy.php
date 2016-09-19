<?php
use yii\helpers\Html;

?>
<?php if (isset($poweredByName) && $poweredByName) : ?>
    <?php if (isset($poweredByUrl) && $poweredByUrl) : ?>
        <?= Yii::t('thememanager', 'Powered by') ?> <?= Html::a($poweredByName, $poweredByUrl) ?>
    <?php else : ?>
        <?= Yii::t('thememanager', 'Powered by') ?> <?= Html::tag('b', $poweredByName) ?>
    <?php endif ?>
    <?php if (isset($poweredByVersion) && $poweredByVersion) : ?>
        <?= Yii::t('thememanager', 'version') ?> <?= $poweredByVersion ?>
    <?php endif ?>
<?php else : ?>
    <?= Yii::powered() ?>
<?php endif ?>
