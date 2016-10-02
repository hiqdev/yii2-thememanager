<?php

/* @var $panel yii\debug\panels\AssetPanel */

?>
<?php if (!empty($panel->data)): ?>
    <div class="yii-debug-toolbar__block">
        <a href="<?= $panel->getUrl() ?>" title="Number of themes defined">Themes <span class="yii-debug-toolbar__label yii-debug-toolbar__label_info"><?= $panel->getCount() ?></span></a>
    </div>
<?php endif ?>
