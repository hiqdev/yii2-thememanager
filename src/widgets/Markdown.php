<?php
/**
 * Pluggable themes for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

use cebe\markdown\GithubMarkdown;
use Yii;
use yii\base\Widget;

/**
 * Markdown widget - renders markdown.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Markdown extends Widget
{
    /**
     * @var array options XXX ?
     */
    public $options = [];

    /**
     * @var string markdown source to render
     */
    public $source;

    /**
     * @var string markdown file to render
     */
    public $file;

    public function run()
    {
        $parser = new GithubMarkdown();

        return $parser->parse($this->prepareSource());
    }

    protected function prepareSource()
    {
        return $this->source ?: $this->readFile($this->file);
    }

    protected function readFile($file)
    {
        return file_get_contents(Yii::getAlias($file));
    }
}
