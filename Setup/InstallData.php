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
 * @copyright  Copyright (c) 2015-2016 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Barbanet\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{

    /**
     * Install Data
     *
     * @param ModuleDataSetupInterface $setup   Module Data Setup
     * @param ModuleContextInterface   $context Module Context
     *
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        $data = [
            [
                'Primer registro',
                'Insertando desde script de instalación de datos',
                date('Y-m-d H:i:s'),
                '1',
                'Prueba de inserción de primer registro.'
            ]
        ];

        foreach ($data as $row) {
            $bind = [
                'title' => $row[0],
                'content' => $row[1],
                'creation_time' => $row[2],
                'is_active' => $row[3],
                'description' => $row[4]
            ];
            $setup->getConnection()->insert(
                $setup->getTable('barbanet_samplemodule'),
                $bind
            );
        }
    }
}
