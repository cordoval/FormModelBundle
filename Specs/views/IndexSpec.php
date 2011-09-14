<?php
namespace Cordova\Bundle\FormModelBundle\Specs\views;

use \PHPSpec\Context\Symfony2\View;

class DescribeIndex extends View
{
    function itRendersTheSelectedVideo()
    {
        $video = \Mockery::mock(
            'Application_Model_Video', array('getName' => 'Revolution OS'));

        $this->render('CordovaFormModelBundle:Default:index.html.twig', array(
            'video' => $video,
        ));

        $this->rendered->should->contain('Revolution OS');
    }
}