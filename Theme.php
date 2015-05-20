<?php
/**
 * @link    http://hiqdev.com/yii2-thememanager
 * @license http://hiqdev.com/yii2-thememanager/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\thememanager;

use Yii;
use ReflectionClass;

/**
 * Menu is a manageable collection of child [[Menu]]s
 */
class Theme extends \yii\base\Theme implements \hiqdev\collection\ItemWithNameInterface
{

    /**
     * @var string theme name
     */
    public $name;

    /**
     * @var array readonly pathMap
     */
    protected $_pathMap;

    /**
     * Getter for pathMap
     */
    public function init()
    {
        parent::init();
        if (!$this->pathMap) {
            $ref = new ReflectionClass($this);
            $dir = dirname($ref->getFilename());
            $this->pathMap = [
                '@app/views'    => $dir . DIRECTORY_SEPARATOR . 'views',
                '@app/widgets'  => $dir . DIRECTORY_SEPARATOR . 'widgets',
            ];
        }
    }

    private $_baseUrl;

    /**
     * @return string the base URL (without ending slash) for this theme. All resources of this theme are considered
     * to be under this base URL.
     */
    public function getBaseUrl()
    {
        if (!$this->_baseUrl) {
            $this->_baseUrl = '@web/themes/'.$this->name;
        }

        return $this->_baseUrl;
    }

}
