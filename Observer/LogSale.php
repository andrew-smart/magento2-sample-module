<?php

namespace Smartie\SampleModule\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class LogSale implements ObserverInterface
{
    protected $_logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_logger = $logger;
    }

    public function execute(Observer $observer)
    {
        /** @var \Magento\Sales\Model\Order $order */
        $order = $observer->getEvent()->getOrder();
        if ($order) {
            $this->_logger->debug($order->getGrandTotal());
        }
    }
}
