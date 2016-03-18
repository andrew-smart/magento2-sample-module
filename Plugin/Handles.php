<?php

namespace Smartie\SampleModule\Plugin;

use Magento\Customer\Model\Session;
use Magento\Framework\View\Result\Page;
use Magento\Store\Model\GroupFactory;

class Handles
{
    protected $customerSession;

    protected $groupFactory;

    public function __construct(
        Session $customerSession,
        GroupFactory $groupFactory
    ) {
        $this->customerSession = $customerSession;
        $this->groupFactory = $groupFactory;
    }

    public function afterAddPageLayoutHandles(Page $subject)
    {
        $group = $this->groupFactory->create()
            ->load($this->customerSession->getCustomerGroupId());
        if ($group->getId() >= 0) {
            $handle = sprintf("customer_group_%s", strtolower(preg_replace("/[^A-Za-z0-9]/", '_', $group->getName())));
            $subject->addHandle($handle);
        }

        return $subject;
    }
}
