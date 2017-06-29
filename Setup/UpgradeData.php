<?php
/**
 * Barbanet_SampleModule
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Barbanet
 * @package    Barbanet_SampleModule
 * @copyright  Copyright (c) 2015-2017 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Barbanet\SampleModule\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;


class UpgradeData implements UpgradeDataInterface
{

    /**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */
    protected $eavSetupFactory;

    /**
     * Init
     *
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(
        EavSetupFactory $eavSetupFactory
    )
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * Upgrade Data
     *
     * @param ModuleDataSetupInterface $setup   Module Data Setup
     * @param ModuleContextInterface   $context Module Context
     *
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        if (version_compare($context->getVersion(), '2.11.0')) {

            if ($installer->getTableRow($installer->getTable('barbanet_samplemodule'), 'row_id', 1)) {
                $installer->updateTableRow(
                    $installer->getTable('barbanet_samplemodule'),
                    'row_id',
                    1,
                    'description',
                    'Actualizado contenido con script'
                );
            }

        }

        if (version_compare($context->getVersion(), '2.20.0')) {

            /** @var EavSetup $eavSetup */
            $eavSetup = $this->eavSetupFactory->create(
                ['setup' => $setup]
            );

            $attributes = [
                'price',
                'special_price',
                'special_from_date',
                'special_to_date',
                'minimal_price',
                'cost',
                'tier_price',
                'weight',
            ];

            foreach ($attributes as $attribute) {

                $applyTo = explode(
                    ',',
                    $eavSetup->getAttribute(\Magento\Catalog\Model\Product::ENTITY, $attribute, 'apply_to')
                );
                if (!in_array(\Barbanet\SampleModule\Model\Product\Type\Sample::TYPE_ID, $applyTo)) {
                    $applyTo[] = \Barbanet\SampleModule\Model\Product\Type\Sample::TYPE_ID;
                    $eavSetup->updateAttribute(
                        \Magento\Catalog\Model\Product::ENTITY,
                        $attribute,
                        'apply_to',
                        implode(',', $applyTo)
                    );
                }
            }

        }

    }

}
