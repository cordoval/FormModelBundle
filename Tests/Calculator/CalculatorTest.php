<?php

namespace Cordova\Bundle\FormModelBundle\Tests\Calculator;

use Cordova\Bundle\FormModelBundle\Calculator\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    protected $calculator;
    
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @test
     */
    public function shouldAllowForNumbersToBePushed() {

        $num = 3;
        $this->calculator->push($num);
        $this->calculator->add();
        $this->assertEquals($this->calculator->result(), $num);
    }

//    public function shouldOutputTotalResult() {
//        $calculator->push($argument);
//    }
}
