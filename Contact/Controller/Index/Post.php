<?php

namespace Renato\Contact\Controller\Index;

use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Magento\Contact\Model\ConfigInterface;
use Magento\Contact\Model\MailInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\ObjectManager;
use Renato\Contact\Logger\Logger;

class Post extends \Magento\Contact\Controller\Index implements HttpPostActionInterface
{
    protected $_logger;
    protected $fileName = '/var/log/test.log';
    
    public function __construct(
        Context $context,
        ConfigInterface $contactsConfig,
        MailInterface $mail,
        DataPersistorInterface $dataPersistor,
        Logger $logger = null
        
    ) {
        parent::__construct($context, $contactsConfig);
        $this->context = $context;
        $this->mail = $mail;
        $this->dataPersistor = $dataPersistor;
        $this->_logger = $logger ?: ObjectManager::getInstance()->get(Logger::class);
    }


  
    public function execute()
    {
        $post = $this->getRequest()->getPostValue();
       
        if (!$post) {
            $this->_redirect('*/*/');
            return;
        }
            $debug = "Hibrido Teste - Formulário de Contato : Name:". $post['name']. " Departament:". $post['departament']
            ." E-mail: ". $post['email'] . " Phone: ".$post['telephone']. " Message: ".$post['comment'];
            $this->_logger->info($debug);

            $this->messageManager->addSuccess(
                __('Obrigado pelo envio do contato, em breve retornaremos!')
            );
            $this->_redirect('/');
            return;
        
    }
}

