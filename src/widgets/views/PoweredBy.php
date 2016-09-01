<?php if (isset($poweredByName) && $poweredByName) : ?>
    <?php if (isset($poweredByUrl) && $poweredByUrl) : ?>
        Powered by <a href="<?= $poweredByUrl ?>"><?= $poweredByName ?></a>
    <?php else : ?>
        Powered by <b><?= $poweredByName ?></a>
    <?php endif ?>
    <?php if (isset($poweredByVersion) && $poweredByVersion) : ?>
        version <?= $poweredByVersion ?>
    <?php endif ?>
<?php else : ?>
    <?= Yii::powered() ?>
<?php endif ?>
