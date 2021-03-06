<?php

/** @var array $options */
/** @var string $image */
/** @var string $url */
use yii\helpers\Html;

?>

<?php if (!empty($image)) : ?>
    <?= Html::beginTag('a', array_merge(['href' => $url, 'class' =>'logo'], $options)) ?>
        <?= Html::img($image, $imageOptions) ?>
    <?= Html::endTag('a') ?>
<?php else : ?>
    <?= Html::a($name, $url, $options) ?>
<?php endif ?>
