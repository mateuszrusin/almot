<?php

namespace Almot\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
    * Kontroller to jest
    */
    public function indexAction($name)
    {
        return $this->render('AlmotPlatformBundle:Default:index.html.twig', array('name' => $name));
    }
}
