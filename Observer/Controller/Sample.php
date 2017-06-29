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

namespace Barbanet\SampleModule\Observer\Controller;

use Magento\Framework\Event\ObserverInterface;

class Sample implements ObserverInterface
{

    /**
     * @var
     */
    private $logger_custom;

    /**
     * @param \Barbanet\SampleModule\Logger\Sample $logger_custom
     */
    public function __construct(
        \Barbanet\SampleModule\Logger\Sample $logger_custom
    ) {
        $this->logger_custom = $logger_custom;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $sample = $observer->getSample();

        $this->logger_custom->info($sample);
    }

}
