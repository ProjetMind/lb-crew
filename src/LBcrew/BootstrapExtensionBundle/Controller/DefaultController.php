<?php

namespace LBcrew\BootstrapExtensionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LBcrewBootstrapExtensionBundle:Default:index.html.twig', array('name' => $name));
    }
}
