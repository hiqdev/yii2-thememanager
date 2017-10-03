<?php

/* @var $panel yii\debug\panels\AssetPanel */

use yii\helpers\Inflector;

?>
<h1>Themes</h1>

<?php if (empty($panel->data)) {
    echo '<p>No theme was used.</p>';

    return;
} ?>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <caption>
            <p>
                Total <b><?= $panel->getCount() ?></b> themes were defined.
                Current: <a href="#<?= $panel->getCurrent() ?>"><?= $panel->getCurrent() ?></a>.
                Default: <a href="#<?= $panel->getDefault() ?>"><?= $panel->getDefault() ?></b>.
            </p>
        </caption>
    <?php foreach ($panel->getThemes() as $name => $theme) : ?>
        <thead>
            <tr>
                <td colspan="2"><h3 id="<?= Inflector::camel2id($name) ?>"><?= $theme['class'] ?></h3></td>
            </tr>
        </thead>
        <tbody>
        <?php foreach (['current', 'default', 'name', 'label'] as $key) : ?>
            <?php if (isset($theme[$key])) : ?>
            <tr>
                <th><?= $key ?></th>
                <td><?= isset($theme[$key]) ? $theme[$key] : null ?></td>
            </tr>
            <?php endif ?>
        <?php endforeach ?>
        <?php foreach (['assets', 'pathMap'] as $key) : ?>
            <?php if (isset($theme[$key])) : ?>
            <tr>
                <th><?= $key ?></th>
                <td style="font-family:monospace"><?php var_export($theme[$key]) ?></td>
            </tr>
            <?php endif ?>
        <?php endforeach ?>
        </tbody>
    <?php endforeach ?>
    </table>
</div>
