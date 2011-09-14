<?php
namespace Cordova\Bundle\FormModelBundle\Specs\views;

use \PHPSpec\Context\Symfony2\View;

class DescribeIndex extends View
{
    function itRendersTheSelectedVideo()
    {
        $video = \Mockery::mock(
            'Application_Model_Video', array('getName' => 'Revolution OS'));

        $output = $this->render('CordovaFormModelBundle:Default:index.html.twig', array(
            'video' => $video,
        ));
        print_r($output);
        //die();
        $output->should->contain('Revolution OS');
    }
}