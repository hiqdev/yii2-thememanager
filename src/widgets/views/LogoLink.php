<?php

/** @var array $options */
/** @var string $image */
/** @var string $url */
use yii\helpers\Html;

?>
<?php if (!empty($image)) : ?>
    <?= Html::a(Html::img($image, $options), $url) ?>
<?php else : ?>
    <?= Html::a($name, $url, $options) ?>
<?php endif ?>
