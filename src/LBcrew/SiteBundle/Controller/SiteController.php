<?php
namespace LBcrew\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;

class SiteController extends Controller
{
  public function indexAction()
  {
      return $this->render("::layout.html.twig", $s = array('id'=>'test'));
  }
  
  public function testAction(){
   
   //On récupère la route
   $urlDeBase = $this->getRequest()->getBaseUrl();
   $url = explode("/",$this->getRequest()->getRequestUri());
   
   //ON supprime les éléments non utilies
   for($i = 0; $i <= 3; $i++){
    unset($url[$i]);
   }
   
   $url = array_values($url);
   
   //Pour chaque élément on récupère la route correspondante et on contruit la liste
   
   $key =""; $value  = ""; $pattern = "";
   foreach ($url as $key => $value){
       
       $pattern = $pattern.'/'.$value;
       $route = $this->get('router')->match($pattern);
       
      $pages[] = $route['_route'];
    }
    
   return $this->render("::layout.html.twig", $s = array('pages' => $pages));   
  }
  
  public function generateNavigationAction(){
      
      $urlDeBase = $this->getRequest()->getBaseUrl();
      $url = explode("/",$this->getRequest()->getRequestUri());
      
  }
}
?>
