<?php

/** @var string $parentId */
/** @var string $itemId */
/** @var array $item */
use yii\helpers\Html;

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <?= Html::a('<i class="indicator fa fa-plus-square-o pull-left"></i>' . $item['label'], '#' . $itemId, [
                'data-toggle' => 'collapse',
                'data-parent' => '#' . $parentId,
            ]) ?>
        </h4>
    </div>
    <div id="<?= $itemId ?>" class="panel-collapse collapse">
        <div class="panel-body">
            <?php if (isset($item['items'])) : ?>
                <div class="row">
                    <div class="col-sm-12">
                        <?php foreach ($item['items'] as $subItemId => $subItem) : ?>
                            <?= $this->render('node', ['item' => $subItem, 'itemId' => $subItemId, 'parentId' => $itemId]) ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>
                <?= Html::tag('div', $item['content'], ['class' => 'panel-body-content']) ?>
            <?php endif; ?>
        </div>
    </div>
</div>
