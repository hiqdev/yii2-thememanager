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

use yii\helpers\ArrayHelper;

class DetailedTheme
{
    protected $theme;

    public $description = '/assets/description.md';

    public $license = 'MIT License';

    public $licenseText = '/assets/license.md';

    public $readme = '/assets/readme.md';

    public $author = '/assets/author.md';

    public $images = [
        '/assets/screenshots/1.png',
        '/assets/screenshots/2.png',
        '/assets/screenshots/3.png',
    ];

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getAttributes()
    {
        return array_merge(ArrayHelper::toArray($this->theme), ArrayHelper::toArray($this));
    }
}
