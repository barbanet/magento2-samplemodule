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
 * @copyright  Copyright (c) 2015-2018 Damián Culotta. (http://www.damianculotta.com.ar/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Barbanet\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Barbanet\SampleModule\Helper\Data;

/**
 * Basic SampleModule content block
 */
class Basic extends Template
{

    /**
     * @var \Barbanet\SampleModule\Helper\Data
     */
    private $helper;

    /**
     * @param Template\Context $context
     * @param array $data
     * @param Data $helper
     */
    public function __construct(
        Template\Context $context,
        array $data = [],
        Data $helper
    ){
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
        $this->helper = $helper;
    }

    /**
     * Returns a dummy string.
     *
     * @return string
     */
    public function getDummyString()
    {
        return $this->helper->convertText('Another line without translation defined into the block.');
    }

}
