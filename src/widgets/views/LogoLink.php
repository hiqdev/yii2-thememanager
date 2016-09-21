<?php

use yii\helpers\Html;

?>
<?php if (!empty($image)) : ?>
    <?= Html::a("<img src=\"$image\">", $url) ?>
<?php else : ?>
    <?= Html::a($name, $url) ?>
<?php endif ?>
