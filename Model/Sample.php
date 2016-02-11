<?php

namespace Smartie\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Sample
 * @package Smartie\SampleModule\Model
 * @method Sample setName(string $name)
 */
class Sample extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Smartie\SampleModule\Model\ResourceModel\Sample');
    }
}
