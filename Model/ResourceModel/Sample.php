<?php

namespace Smartie\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Sample extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('sample', 'sample_id');
    }
}
