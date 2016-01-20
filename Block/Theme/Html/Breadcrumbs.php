<?php

namespace Smartie\SampleModule\Block\Theme\Html;

use Magento\Theme\Block\Html;

class Breadcrumbs extends Html\Breadcrumbs
{
    public function getCrumbs()
    {
        return $this->_crumbs;
    }

    protected function _toHtml()
    {
        $this->setModuleName($this->extractModuleName('Magento\Theme\Block\Html\Breadcrumbs'));
        return parent::_toHtml();
    }
}
