<?php


namespace hiqdev\thememanager\widgets;

/**
 * Class MailLogoLink
 * @package hiqdev\thememanager\widgets
 */
class MailLogoLink extends LogoLink
{
    /**
     * @var string
     */
    public $websiteUrl = '';

    /**
     * @inheritDoc
     */
    protected function getImage($path)
    {
        return $this->websiteUrl . parent::getImage($path);
    }
}
