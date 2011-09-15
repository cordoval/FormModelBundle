<?php

namespace Cordova\Bundle\FormModelBundle\Specs\controllers;

use \PHPSpec\Context\Symfony2\Controller as DescribeController;

class DescribeReviewController extends DescribeController
{
    function itShouldRouteTheReviewsPageToTheIndexAction()
    {
        $this->routeFor(array('controller' => 'review','action' => 'index'))
             ->should->be('/review');
    }

    function itShouldDispatchToTheReviewController()
    {
        $container = new \Yadif_Container(
            new \Zend_Config_Xml(APPLICATION_PATH . "/configs/objects.xml")
        );

        $mapper = \Mockery::mock('Application_Model_VideoMapper');
        $mapper->shouldReceive('find')->andReturn($container->videoModel)->with('1')->once();
        $container->videoMapper = $mapper;
        $this->_getZendTest()->bootstrap->getBootstrap()->setContainer($container);

        $this->post('/review', array('id' => '1'));
    }
}