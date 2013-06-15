<?php

namespace LBcrew\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LBcrew\UserBundle\Entity\User as BaseModelUser;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * Ecole
 *
 * @ORM\Table(name="ecole")
 * @ORM\Entity(repositoryClass="LBcrew\UserBundle\Entity\EcoleRepository")
 * 
 * @UniqueEntity(fields = "username", targetClass = "LBcrew\UserBundle\Entity\BaseUser", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "LBcrew\UserBundle\Entity\BaseUser", message="fos_user.email.already_used")
 */
class Ecole extends User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * 
     * @ORM\Column(name="nom_ecole", type="string")
     * 
     */
    private $nomEcole;
    
    
    /**
     * @ORM\Column(name="tab_eleves", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="tab_eleve", referencedColumnName="id")
     * @var type array
     */
    private $tabEleves;

    /**
     * @ORM\Column(name="tab_profs", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="tab_profs", referencedColumnName="id")
     */
    private $tabProfs;
    
    /**
     * @ORM\Column(name="adresse", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\UserBundle\Entity\Adresse")
     * @ORM\JoinColumn(name="id_adresse", referencedColumnName="id", nullable=true)
     * @var type integer
     */
    private $adresse;
    
    /**
     * @ORM\Column(name="tel", type="integer")
     *
     * @var type integer
     */
    protected $tel;
    
    /**
     * @ORM\Column(name="fax", type="integer")
     *
     * @var type integer
     */
    protected $fax;

    /**
     * @var string
     */
    protected $siteWeb;

    /**
     * @var \LBcrew\UserBundle\Entity\avatar
     */
    protected $avatar;
}