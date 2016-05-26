<?php

namespace Smartie\SampleModule\Setup;

use Magento\Catalog\Model\Product;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $eavSetupFactory;

    public function __construct(
        EavSetupFactory $eavSetupFactory
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '2.0.1') < 0) {
            /** @var EavSetup $eavSetup */
            $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

            $entityTypeId = $eavSetup->getEntityTypeId(Product::ENTITY);

            $eavSetup->addAttribute($entityTypeId, 'sample', [
                'type' => 'varchar',
                'label' => 'Sample',
                'input' => 'multiselect',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
                'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
                'group' => 'Sample Group',
                'visible_on_front' => 1,
                'option' => [
                    'values' => [
                        0 => 'Sample Option One',
                        1 => 'Sample Option Two'
                    ]
                ]
            ]);
        }

        $setup->endSetup();
    }
}
