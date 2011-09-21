<?php

namespace Cordova\Bundle\FormModelBundle\Specs\controllers;

use \PHPSpec\Context\Symfony2\Controller as DescribeController;

require_once __DIR__ . '/../../../../../../../app/bootstrap.php.cache';
require_once __DIR__ . '/../../../../../../../app/AppKernel.php';
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpFoundation\Request;

class DescribeReviewController extends DescribeController
{
    public $container;

    function beforeAll() {
        $this->container = $this->getContainer();
    }
    
    function itShouldRouteTheReviewsPageToTheIndexAction()
    {
        $this->routeFor(array('controller' => 'review','action' => 'index'))
             ->should->be('/review');
    }
/*
    function itShouldDispatchToTheReviewController()
    {

        //var_export($container);
        //die();

        $em = \Mockery::mock('VideoEntityManager');

        $em->shouldReceive('find')->andReturn($em)->with('1')->once();

        $container->set('videoEntityManager', $em);

        $this->post('/review', array('id' => '1'));
    }
*/
}