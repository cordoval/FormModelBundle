<?php

namespace Cordova\Bundle\FormModelBundle\Features\Context;

use Behat\BehatBundle\Context\BehatContext,
    Behat\BehatBundle\Context\MinkContext;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Feature context.
 */
class FeatureContext extends MinkContext //BehatContext if you want to test web
{
//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        $container = $this->getContainer();
//        $container->get('some_service')->doSomethingWith($argument);
//    }
//

    /**
     * @Given /^I have entered (\d+) into the calculator$/
     */
    public function iHaveEnteredIntoTheCalculator($argument)
    {
        $container = $this->getContainer();
        $calculator = $container->get('cordova_form_model.calculator');
        $calculator->push($argument);
    }

    /**
     * @When /^I press add$/
     */
    public function iPressAdd()
    {
        $container = $this->getContainer();
        $calculator = $container->get('cordova_form_model.calculator');
        $calculator->add();
    }

    /**
     * @Then /^the result should be (\d+) on the screen$/
     */
    public function theResultShouldBeOnTheScreen($argument)
    {
        $container = $this->getContainer();
        $calculator = $container->get('cordova_form_model.calculator');
        assertEquals($argument, $calculator->result());
    }


    /**
     * @Given /^I am in a directory "([^"]*)"$/
     */
    public function iAmInADirectory($dir)
    {
        //if (!file_exists($dir)) {
        //    mkdir($dir);
        //}
        chdir($dir);
    }

    /**
     * @When /^I run "([^"]*)"$/
     */
    public function iRun($command)
    {
        exec($command, $output);
        $this->output = trim(implode("\n", $output));
    }

    /**
     * @Then /^I should see:$/
     */
    public function iShouldSee(PyStringNode $string)
    {
        if ($string->getRaw() !== $this->output) {
            throw new \Exception(
                "Actual output is:\n" . $this->output
            );
        }
    }

}
