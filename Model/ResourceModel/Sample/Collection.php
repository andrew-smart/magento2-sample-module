<?php

namespace Smartie\SampleModule\Model\ResourceModel\Sample;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Smartie\SampleModule\Model\Sample',
                     'Smartie\SampleModule\Model\ResourceModel\Sample');
    }
}
