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

namespace Barbanet\SampleModule\Model;

use Barbanet\SampleModule\Api\PingInterface;

class Ping implements PingInterface
{

    /**
     * Returns a test message
     *
     * @api
     * @return string Pong message.
     */
    public function pong()
    {
        return "Pong!";
    }

}
