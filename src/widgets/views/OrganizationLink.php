<?php

use yii\helpers\Html;

?>
<?php if (empty($url)) : ?>
    <?= $name ?>
<?php else : ?>
    <?= Html::a($name, $url, $options) ?>
<?php endif ?>
