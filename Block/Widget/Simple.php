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

namespace Barbanet\SampleModule\Block\Widget;

/**
 * Sample widget
 * Class Simple
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Simple extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{

    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('widget/simple.phtml');
    }

}
