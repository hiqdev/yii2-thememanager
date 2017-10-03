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

/**
 * TextPage widget.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class TextPage extends \yii\base\Widget
{
    protected $header;

    protected $footer;

    public function init()
    {
        $this->start();
    }

    public function run()
    {
        return $this->render('TextPage', [
            'content' => $this->finish(),
            'header' => $this->header,
            'footer' => $this->footer,
        ]);
    }

    public function beginHeader()
    {
        $this->start();
    }

    public function endHeader()
    {
        $this->header = $this->finish();
    }

    public function beginFooter()
    {
        $this->start();
    }

    public function endFooter()
    {
        $this->footer = $this->finish();
    }

    protected function start()
    {
        ob_start();
        ob_implicit_flush(false);
    }

    protected function finish()
    {
        return ob_get_clean();
    }
}
