<?php

namespace LBcrew\MediaBundle\Entity;

use LBcrew\MediaBundle\Model\Media as Media;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LBcrew\MediaBundle\Entity\Evenement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MediaBundle\Entity\EvenementRepository")
 */
class Evenement extends Media
{
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
  
    protected $titreMedia;

    protected $datePubMedia;

    protected $nbVueMedia;
    
    protected $descripMedia;
    
    /**
     * @var \DateTime $dateEvenement
     *
     * @ORM\Column(name="date_evenement", type="datetime")
     */
    private $dateEvenement;

    /**
     * @var time $heureDeb
     *
     * @ORM\Column(name="heure_deb", type="time")
     */
    private $heureDeb;

    /**
     * @var time $heureFin
     *
     * @ORM\Column(name="heure_fin", type="time")
     */
    private $heureFin;

    /**
     * @var array $organisateurUser
     *
     * @ORM\Column(name="organisateur_user", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="tab_organisateur_user", referencedColumnName="id")
     */
    private $organisateursUser;
    
    /**
     * @var array $organisateurEcole
     *
     * @ORM\Column(name="organisateur_ecole", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\Ecole")
     * @ORM\JoinColumn(name="tab_organisateur_ecole", referencedColumnName="id")
     */
    private $organisateursEcole;
    
    /**
     * @var array $organisateurGroupe
     *
     * @ORM\Column(name="organisateur_groupe", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\Groupe")
     * @ORM\JoinColumn(name="tab_organisateur_groupe", referencedColumnName="id")
     */
    private $organisateursGroupe;

    /**
     * @var string $prix
     *
     * @ORM\Column(name="prix", type="string", length=50)
     */
    private $prix;

    /**
     * @var integer $adresse
     *
     * @ORM\Column(name="id_adresse", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\UserBundle\Entity\Adresse")
     * @ORM\JoinColumn(name="id_adresse", referencedColumnName="id")
     */
    private $idAdresse;

    /**
     * @ORM\Column(name="genre_evenement", type="array")
     * @ORM\ManyToMany(targetEntity="LBcrew\MediaBundle\Entity\GenreEvenement")
     * 
     *@ORM\JoinColumn(name="id_genre", referencedColumnName="id")
     */
    private $genresEvenement;

    /**
     * @ORM\Column(name="nom_image", type="string")
     * @ORM\OneToOne(targetEntity="LBcrew\MediaBundle\Entity\Photos")
     */
    private $imageEvenement;

}