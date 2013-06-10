<?php

namespace LBcrew\MediaBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LBcrew\MediaBundle\Model\Media
 *
 * @ORM\MappedSuperclass
 */
abstract class Media
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $titre_media
     *
     * @ORM\Column(name="titre_media", type="string", length=255)
     * 
     * @Assert\MinLength(limit=15, message="Le titre doit faire au moins {{ limit }} caractères.")
     * 
     */
    protected $titreMedia;

    /**
     * @var \DateTime $date_pub_media
     *
     * @ORM\Column(name="date_pub_media", type="datetime")
     * 
     * @Assert\DateTime(message="La date de publication est invalide, champ est obligatoire.")
     */
    protected $datePubMedia;

    /**
     *
     * @var decimal $nb_vue_media
     * 
     * @ORM\Column(name="nb_vue_media", type="decimal", nullable=true)
     */
    protected $nbVueMedia;
    
    /**
     *
     * @var string $descrip_media
     * 
     * @ORM\Column(name="descrip_media", type="string", length=255)
     * 
     * @Assert\MinLength(limit=10, message="Le texte est trop court.")
     */
    protected $descripMedia;
    
  

  
}