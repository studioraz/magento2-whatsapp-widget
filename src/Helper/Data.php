<?php

namespace SR\WhatsAppChat\Helper;

use Magento\Framework\View\Asset\Repository;
use Magento\Framework\App\RequestInterface;

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

    public function getWAStatus()
    {
        return $this->scopeConfig->getValue(
            'srwhatsappwidget/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
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
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
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
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Return icon position
     *
     * @return string
     */

    public function getWAPosition()
    {
        return $this->scopeConfig->getValue(
            'srwhatsappwidget/general/position',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Return relative position
     *
     * @return string
     */

    public function getWARelPx()
    {
        return $this->scopeConfig->getValue(
            'srwhatsappwidget/general/rel_px',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Return icon image url
     *
     * @return string
     */

    public function getWAIconUrl()
    {
        $whatsAppIcon = $this->scopeConfig
            ->getValue('srwhatsappwidget/general/sparsh_whatsapp_chat_icon_upload', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        if (!$whatsAppIcon) {
            $params = ['_secure' => $this->request->isSecure()];
            return $this->assetRepo->getUrlWithParams('SR_WhatsAppChat::images/whatsapp-chat-button.png', $params);
        }

        return $this->getMediaUrl(). 'sparsh/whatsapp_chat_image/'.$whatsAppIcon;
    }

    /**
     * Return media path
     *
     * @return string
     */

    public function getMediaUrl()
    {
        return $this->_storeManager->getStore()
            ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
    }
}
