<?php
namespace Renato\IPModule\Controller\IPcontroller;
 
class Meuip extends \Magento\Framework\App\Action\Action
{

    protected $_pageFactory;
    protected $_logger;

 
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Psr\Log\LoggerInterface $logger)
    {
        $this->_pageFactory = $pageFactory;
        $this->_logger = $logger;
        return parent::__construct($context);
    }
     public function execute()
    {   
        $debug = "Hibrido Teste IP Usuário :". $_SERVER['REMOTE_ADDR'];
        $this->_logger->debug($debug);
        return $this->_pageFactory->create();
    }
}


