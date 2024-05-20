<?php

namespace SR\WhatsAppChat\Helper;

use Magento\Framework\View\Asset\Repository;
use Magento\Framework\App\RequestInterface;
use Magento\Store\Model\ScopeInterface;

/**
  * Class Data
  * @package SR\WhatsAppChat\Helper
  */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * @var \Magento\Framework\View\Asset\Repository
     */
    protected $assetRepo;

    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    protected $request;

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        Repository $assetRepo,
        RequestInterface $request
    ) {
        $this->_storeManager = $storeManager;
        $this->assetRepo = $assetRepo;
        $this->request = $request;
        parent::__construct($context);
    }

    /**
     * Return module status
     *
     * @return string
     */

    public function getIsEnabled()
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

    public function getWAPhone()
    {
        return $this->scopeConfig->getValue(
            'srwhatsappwidget/general/phone_number',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Return message
     *
     * @return string
     */

    public function getWAMessage()
    {
        return $this->scopeConfig->getValue(
            'srwhatsappwidget/general/message',
            ScopeInterface::SCOPE_STORE
        );
    }

}
