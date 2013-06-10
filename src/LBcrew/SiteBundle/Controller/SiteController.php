<?php
namespace LBcrew\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
  public function indexAction()
  {
      return $this->render("::layout.html.twig", $s = array('id'=>'test'));
  }
}
?>
