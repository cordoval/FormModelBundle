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
class FeatureContext extends BehatContext //MinkContext if you want to test web
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
    public function iHaveEnteredIntoTheCalculator($argument1)
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
        throw new PendingException();
    }

    /**
     * @Then /^the result should be (\d+) on the screen$/
     */
    public function theResultShouldBeOnTheScreen($argument1)
    {
        throw new PendingException();
    }

}
