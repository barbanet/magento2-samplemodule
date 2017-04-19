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

namespace Barbanet\SampleModule\Block\Html;

/**
 * Html page footer block
 */
class Footer extends \Magento\Theme\Block\Html\Footer
{

    /**
     * Retrieve copyright information + a sample modification
     *
     * @return string
     */
    public function getCopyright()
    {
        if (!$this->_copyright) {
            $this->_copyright = $this->_scopeConfig->getValue(
                'design/footer/copyright',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
            $this->_copyright .= " No hagan esto en casa sin la supervisión de un adulto.";
        }
        return $this->_copyright;
    }

}
