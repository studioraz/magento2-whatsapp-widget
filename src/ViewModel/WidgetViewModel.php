<?php
/*
 * Copyright © 2024 Studio Raz. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace SR\WhatsAppChat\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\Asset\Repository;
use Magento\Framework\App\RequestInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class WidgetViewModel
 * @package SR\WhatsAppChat\ViewModel
 */
class WidgetViewModel implements ArgumentInterface
{
    /**
     * WidgetViewModel constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        private ScopeConfigInterface $scopeConfig
    ) {}

    /**
     * Return module status
     *
     * @return string
     */
    public function getIsEnabled(): ?bool
    {
        return $this->scopeConfig->getValue(
            'srwhatsappwidget/general/enable',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Return phone number
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->scopeConfig->getValue(
            'srwhatsappwidget/general/phone_number',
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getCustomCss()
    {
        return $this->scopeConfig->getValue(
            'srwhatsappwidget/general/custom_css',
            ScopeInterface::SCOPE_STORE
        );
    }
}
