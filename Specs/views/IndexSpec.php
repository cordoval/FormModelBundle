<?php
namespace Review;

// loading from pear
use \PHPSpec\Context\Zend\View as ViewContext;
use \PHPSpec\Context\Symfony2\View as ViewContext2;

class DescribeIndex extends ViewContext2
{
    function itRendersTheSelectedVideo()
    {
        $video = \Mockery::mock(
            'Application_Model_Video', array('getName' => 'Revolution OS'));
        $this->assign('video', $video);
        $this->render();
        $this->rendered->should->contain('Revolution OS');
    }
}