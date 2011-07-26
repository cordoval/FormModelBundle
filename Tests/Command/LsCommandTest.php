<?php

namespace Cordova\Bundle\FormModelBundle\Tests\Command;

use Cordova\Bundle\FormModelBundle\Command\LsCommand;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Console\Application;


class LsCommandTest extends \PHPUnit_Framework_TestCase
{
    // who: "php app/console ls" --> LsCommand.php
    // how: write methods for spec bdd

    protected $lsCommand;

    protected function setUp()
    {
        $this->lsCommand = new LsCommand();
    }

    /**
     * @test
     */
    public function shouldParseWithCordovaColonLs() {
        $this->assertEquals($this->lsCommand->getName(), 'cordova:ls');
    }

    /**
     * @test
     */
    public function shouldHaveDescriptionAs() {
        $this->assertEquals($this->lsCommand->getDescription(), 'Lists files and folders');
    }

    /**
     * @test
     *
     * this will generate an exception so complete here the tag for that
     */
    /*public function shouldThrowExceptionOnNoArgument() {

        require_once __DIR__.'/../../../../../../../app/AppKernel.php';
        $kernel = new \AppKernel('test', false);
        $application = new Application($kernel);

        $command = $application->find('cordova:ls');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('command' => $command->getFullName()));

        //$this->assertRegExp('/.../', $commandTester->getDisplay());
        $commandTester->getDisplay();
        //$this->lsCommand->execute($input, $output);
    }*/

}
