<?php

namespace Smartie\SampleModule\Test\Unit\Block\Theme\Html;

class Breadcrumbs extends \PHPUnit_Framework_TestCase
{
    /** @var \Smartie\SampleModule\Block\Theme\Html\Breadcrumbs */
    protected $block;

    public function setUp()
    {
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);

        // we want this to be a real Magento 2 object
        // so we use the object manager to get it
        $this->block = $objectManager
            ->getObject('Smartie\SampleModule\Block\Theme\Html\Breadcrumbs');
    }

    public function testBlockExtendsOriginal()
    {
        $this->assertInstanceOf('Magento\Theme\Block\Html\Breadcrumbs',
                                $this->block);
    }

    public function testNoCrumbs()
    {
        $this->assertEquals(0, count($this->block->getCrumbs()));
    }

    public function testGetCrumbs()
    {
        $this->block->addCrumb('test', []);
        $this->assertEquals(1, count($this->block->getCrumbs()));
    }
}
