<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager;

use Yii;

/**
 * Asset Converter.
 */
class AssetConverter extends \yii\web\AssetConverter
{
    public function init()
    {
        $this->commands = array_merge([
            'php' => ['css', 'render'],
        ], $this->commands);
    }

    /**
     * {@inheritdoc}
     */
    protected function runCommand($command, $basePath, $asset, $result)
    {
        if ($command === 'render') {
            $res = Yii::$app->getView()->renderFile("$basePath/$asset");
            file_put_contents("$basePath/$result", $res);
        } else {
            return parent::runCommand($command, $basePath, $asset, $result);
        }
    }
}
