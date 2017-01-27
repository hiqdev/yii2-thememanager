<?php

namespace hiqdev\thememanager;

use yii\helpers\ArrayHelper;

class DetailedTheme
{
    protected $theme;

    public $description = 'description.md';

    public $license = 'license.md';

    public $readme = 'readme.md';

    public $author = 'author.md';

    public $images = [
        '1.png',
        '2.png',
        '3.png',
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
