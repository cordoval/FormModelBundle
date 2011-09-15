<?php

namespace Cordova\Bundle\FormModelBundle\Specs\controllers;

use \PHPSpec\Context\Symfony2\Controller as DescribeController;

require_once __DIR__ . '/../../../../../../../app/bootstrap.php.cache';
require_once __DIR__ . '/../../../../../../../app/AppKernel.php';
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpFoundation\Request;

class DescribeReviewController extends DescribeController
{
    function itShouldRouteTheReviewsPageToTheIndexAction()
    {
        $this->routeFor(array('controller' => 'review','action' => 'index'))
             ->should->be('/review');
    }

    function itShouldDispatchToTheReviewController()
    {
        $client = $this->getClient();
        $container = $this->getContainer();

        //$ORM = $container->get('doctrine');
        //$em = $ORM->getEntityManager();
        $em = \Mockery::mock('VideoEntityManager');
        $em->shouldReceive('find')->andReturn($videoModel)->with('1')->once();
        $container->set('videoEntityManager', $em);
        $container->videoManager = $em;

        $this->post('/review', array('id' => '1'));
    }
}