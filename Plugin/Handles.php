<?php

namespace Smartie\SampleModule\Plugin;

use Magento\Framework\View\Result\Page;

class Handles
{
    public function afterAddPageLayoutHandles(Page $subject)
    {
        $subject->addHandle('custom_layout_handle');
        return $subject;
    }
}
