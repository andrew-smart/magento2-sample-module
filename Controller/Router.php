<?php

namespace Smartie\SampleModule\Controller;

use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\RequestInterface;

class Router implements \Magento\Framework\App\RouterInterface
{
    protected $_actionFactory;
    
    public function __construct(ActionFactory $actionFactory)
    {
        $this->_actionFactory = $actionFactory;
    }
    
    public function match(RequestInterface $request)
    {
        $match = preg_match('#^\/example-custom-route-handler-([0-9]*)$#', $request->getPathInfo());
        if ($match) {
            $request->setPathInfo('/cms');
            return $this->_actionFactory->create('Magento\Framework\App\Action\Forward');
        }
    }
}
