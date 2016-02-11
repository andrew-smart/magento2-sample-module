<?php

namespace Smartie\SampleModule\Test\Unit\Console\Command;

use Smartie\SampleModule\Console\Command\SampleCommand;
use Symfony\Component\Console\Tester\CommandTester;

class SampleCommandTest extends \PHPUnit_Framework_TestCase
{
    /** @var SampleCommand */
    protected $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = new SampleCommand();
    }

    public function testExecute()
    {
        $commandTester = new CommandTester($this->command);
        $commandTester->execute([]);
        $this->assertRegExp('/Hello!/', $commandTester->getDisplay());
    }
}
