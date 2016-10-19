<?php

use yii\helpers\Html;

?>
<?php if (!empty($image)) : ?>
    <?= Html::a(Html::img($image), $url) ?>
<?php else : ?>
    <?= Html::a($name, $url) ?>
<?php endif ?>
