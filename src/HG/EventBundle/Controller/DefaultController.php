<?php

namespace HG\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HGEventBundle:Default:index.html.twig', array('name' => $name));
    }
}
