<?php

use yii\helpers\Html;

/** @var array $items */
/** @var \yii\web\View $this */
/** @var \hipanel\site\widgets\Faq $this ->context */

$this->registerJs("
// Switch signs plus and minus on collapse
$('.collapse').on('show.bs.collapse', function(event){
    var i = $(this).siblings().find('i').eq(0);
    i.toggleClass('fa-plus-square-o fa-minus-square-o');
    event.stopPropagation();
}).on('hide.bs.collapse', function(event){
    var i = $(this).siblings().find('i').eq(0);
    i.toggleClass('fa-minus-square-o fa-plus-square-o');
    event.stopPropagation();
});

//  Select first tab
$('.faq-tabs .faq-categories li:eq(0) a').tab('show');

// Init FAQ plugin
$('#faq').faq();
");
?>
11111111111111111111111111111111111111111111
<div id="faq" class="faq-tabs">
    <div class="row">
        <div class="col-sm-12">
            <div class="faq-categories">
                <ul>
                    <?php foreach ($items as $tabId => $tab): ?>
                        <li>
                            <?= Html::a(sprintf('%s<span class="badge">%d</span>', $tab['label'], count($tab['items'])), '#tab-' . $tabId, ['data-toggle' => 'tab']) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="faq-tabs-white">
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable tabs-top-horizontal">
                <div class="tab-content">
                    <?php foreach ($items as $tabId => $tab) : ?>
                        <div class="tab-pane fade" id="<?= 'tab-' . $tabId ?>">
                            <div id="<?= $tabId ?>" class="panel-group spacing-40">
                                <?php foreach ($tab['items'] as $itemId => $item) : ?>
                                    <?= $this->render('node', ['item' => $item, 'itemId' => $itemId, 'parentId' => $tabId]) ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>