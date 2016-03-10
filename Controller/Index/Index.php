<?php

namespace Smartie\SampleModule\Controller\Index;

use Magento\Framework\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action\Action
{
    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }
}
