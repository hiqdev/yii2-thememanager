<?php
/**
 * Theme Manager for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-thememanager
 * @package   yii2-thememanager
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\thememanager\widgets;

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
