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

namespace Barbanet\SampleModule\Block\Product\Type\Sample;

use Magento\Catalog\Block\Product\AbstractProduct;

/**
 * Basic content block
 */
class Basic extends AbstractProduct
{

    /**
     * Returns a dummy string.
     *
     * @return string
     */
    public function getCustomProductMessage()
    {
        return 'Custom content from: ' . __METHOD__;
    }

}
