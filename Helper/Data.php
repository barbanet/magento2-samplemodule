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

namespace Barbanet\SampleModule\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

/**
 * SampleModule base helper
 */
class Data extends AbstractHelper
{

    /**
     * @param $path
     * @param string $store
     * @return mixed
     */
    protected function getConfig($path, $store = \Magento\Store\Model\ScopeInterface::SCOPE_STORE)
    {
        return $this->scopeConfig->getValue(
            'samplemodule/' . $path,
            $store
        );
    }

    public function isEnabled()
    {
        return $this->getConfig('sample/enabled');
    }

    /**
     * @param $text
     * @return string
     */
    public function convertText($text)
    {
        return strtoupper($text);
    }

}
