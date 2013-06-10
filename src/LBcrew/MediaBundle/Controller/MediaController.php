<?php

namespace LBcrew\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MediaController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LBcrewMediaBundle:Default:index.html.twig', array('name' => $name));
    }
}
