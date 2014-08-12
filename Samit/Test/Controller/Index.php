<?php
namespace Samit\Test\Controller;
use Magento\Framework\App\RequestInterface;
class Index extends \Magento\Framework\App\Action\Action
{
public $_someName;
 public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\UrlFactory $urlFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\App\State $appState
       
    ) {
       // $this->_session = $customerSession;
	   $this->_urlFactory = $urlFactory;
       // $this->_someName = $someName;
        $this->_storeManager = $storeManager;
        $this->_scopeConfig = $scopeConfig;
        $this->appState = $appState;
       // $this->_customerAccountService = $customerAccountService;
        parent::__construct($context);
    }
}