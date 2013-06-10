<?php

namespace LBcrew\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use LBcrew\MediaBundle\Form\videoType;

class VideoController extends Controller
{
    public function indexAction()
    {
        /*Liste des videos pour cette methode*/
    }
    
    public function listeVideoAction()
    {
        
    }
    
    public function ajouterVideoAction()
    {
        //Création de l'objet video 
        $video = new \LBcrew\MediaBundle\Entity\video;
        
        $form = $this->createForm(new videoType, $video);
        
        $request = $this->getRequest('request');
        
        if($request->getMethod() == "POST")
        {
            $form->bind($request);
            
            $video->setDatePubMedia( new \DateTime());
            $video->setNbVueMedia(0);
            
            if($form->isValid())
            {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($video);
                $em->flush();
                
                //On retournera peut-être la liste des videos
                $this->get('session')->getFlashBag()->add('notice', 'La vidéo a été ajoutée avec succée.');
                return $this->redirect( $this->generateUrl('ajouter_video') );
            }
        }
        return $this->render('LBcrewMediaBundle::layout.html.twig', array('form' => $form->createView()));
    }
}
