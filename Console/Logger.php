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

namespace Barbanet\SampleModule\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Logger
 * @package Barbanet\SampleModule\Console
 */
class Logger extends Command
{

    /**
     * @var
     */
    private $logger;

    /**
     * @var
     */
    private $logger_custom;

    /**
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Barbanet\SampleModule\Logger\Sample $logger_custom
     * @param null $name
     */
    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        \Barbanet\SampleModule\Logger\Sample $logger_custom,
        $name = null
    ) {
        $this->logger = $logger;
        $this->logger_custom = $logger_custom;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('samplemodule:logger');
        $this->setDescription('Barbanet_SampleModule Logger test command');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->logger->alert('Mensaje Alerta');
        $this->logger->critical('Mensaje Crítico');
        $this->logger->debug('Mensaje Debug');
        $this->logger->emergency('Mensaje Emergencia');
        $this->logger->error('Mensaje Error');
        $this->logger->info('Mensaje Info');
        $this->logger->notice('Mensaje Notice');
        $this->logger->warning('Mensaje Warning');

        $this->logger->log(\Psr\Log\LogLevel::INFO, 'Mensaje Log');

        $this->logger_custom->info('Estoy probando mi logger custom');

    }

}
