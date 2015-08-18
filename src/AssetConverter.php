<?php
/**
 * @link    http://hiqdev.com/yii2-thememanager
 * @license http://hiqdev.com/yii2-thememanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\thememanager;

use Yii;
use yii\base\InvalidConfigException;

/**
 * Asset Converter
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
     * @inheritdoc
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
