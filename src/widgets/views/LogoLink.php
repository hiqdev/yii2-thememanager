<?php

/** @var array $options */
/** @var string $image */
/** @var string $imageOptions */
/** @var string $smallImage */
/** @var string $smallImageOptions */
/** @var string $url */
use yii\helpers\Html;

?>

<?php if (!empty($image)) : ?>
    <?= Html::beginTag('a', array_merge(['href' => $url, 'class' =>'logo'], $options)) ?>
        <?= Html::img($image, $imageOptions) ?>
        <?php if (!empty($smallImage)) : ?>
            <?= Html::img($smallImage, $smallImageOptions) ?>
        <?php endif ?>
    <?= Html::endTag('a') ?>
<?php else : ?>
    <?= Html::a($name, $url, $options) ?>
<?php endif ?>
