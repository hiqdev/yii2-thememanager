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
 * CopyrightYears widget - renders copyright years like "2016-2017".
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class CopyrightYears extends \yii\base\Widget
{
    /**
     * @var string copyright years
     */
    public $years;

    /**
     * @var string copyright year
     */
    public $year;

    public function run()
    {
        if ($this->years) {
            return $this->years;
        }
        $curr = date('Y');

        return $this->year ? "{$this->year}-$curr" : $curr;
    }
}
