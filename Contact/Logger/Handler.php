<?php
namespace Renato\Contact\Logger;

use Monolog\Logger;


class Handler extends \Magento\Framework\Logger\Handler\Base
{   
    protected $loggerType = Logger::INFO;

    protected $fileName = '/var/log/contact_hibrido.log';
}