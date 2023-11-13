<?php

use yii\helpers\Html;

/** @var array $options */
/** @var string $image */
/** @var string $url */
/** @var string $name */

// SEO title
$this->registerCss(<<<CSS
.header .logo > h2 {
    position: absolute;
    top: -10000px;
    left: -10000px;
}
CSS
);

?>

<?php if (!empty($image)) : ?>
    <?= Html::beginTag('a', array_merge(['href' => $url, 'class' =>'logo'], $options)) ?>
        <?= Html::img($image, $imageOptions ?? []) ?>
    <?= Html::endTag('a') ?>
<?php else : ?>
    <?= Html::a($name, $url, $options) ?>
<?php endif ?>

<?= Html::tag('h2', $name) ?>
