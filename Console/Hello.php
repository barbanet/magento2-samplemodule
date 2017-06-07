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

namespace Barbanet\SampleModule\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Hello
 * @package Barbanet\SampleModule\Console
 */
class Hello extends Command
{

    /**
     * @var
     */
    private $helper;

    /**
     * @param \Barbanet\SampleModule\Helper\Data $helper
     * @param null $name
     */
    public function __construct(
        \Barbanet\SampleModule\Helper\Data $helper,
        $name = null
    ) {
        $this->helper = $helper;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('samplemodule:hello');
        $this->setDescription('Barbanet_SampleModule Hello sample command');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$this->helper->isEnabled()) {
            $output->writeln("Barbanet_SampleModule is disabled. Check your configuration.");
            return false;
        }
        $output->writeln("My Sample Module message: Hello World!");
    }

}
