<?php

namespace Smartie\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Smartie\SampleModule\Model\SampleFactory;

class InstallData implements InstallDataInterface
{
    /** @var \Smartie\SampleModule\Model\SampleFactory  */
    protected $sampleFactory;

    public function __construct(
        SampleFactory $sampleFactory
    ) {
        $this->sampleFactory = $sampleFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var \Smartie\SampleModule\Model\Sample $sample */
        $sample = $this->createSample();
        // create some sample data
        $sample
            ->setName('Sample')
            ->save();
    }

    public function createSample()
    {
        return $this->sampleFactory->create();
    }
}
