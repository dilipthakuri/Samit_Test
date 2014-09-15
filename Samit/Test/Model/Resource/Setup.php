<?php
namespace Samit\Test\Model\Resource;

class Setup extends \Magento\Framework\Module\Setup
{
    public function __construct(
        \Magento\Framework\Module\Setup\Context $context,
        $resourceName,
         $moduleName = 'Samit_Test',
        $connectionName = \Magento\Framework\Module\Updater\SetupInterface::DEFAULT_SETUP_CONNECTION
    ) {
        parent::__construct($context, $resourceName, $moduleName, $connectionName);
    }
    
}