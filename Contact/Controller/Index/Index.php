<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Renato\Contact\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Contact\Controller\Index implements HttpGetActionInterface
{
    /**
     * Show Contact Us page
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */

    
    public function execute()
    {
        echo "test"; die();
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
