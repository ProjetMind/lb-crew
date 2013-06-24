<?php

namespace LBcrew\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LBcrew\UserBundle\Entity\BaseUser as BaseUser;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="LBcrew\UserBundle\Entity\GroupeRepository")
 * 
 * @UniqueEntity(fields = "username", targetClass = "LBcrew\UserBundle\Entity\BaseUser", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "LNcrew\UserBundle\Entity\BaseUser", message="fos_user.email.already_used")
 *  
 */
class Groupe extends BaseUser
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
     * @ORM\Column(name="nom_groupe", type="string")
     * 
     */
    private $nomGroupe;


    /**
     * @ORM\Column(name="tab_membres_groupe", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="tab_membres_groupe", referencedColumnName="id")
     */
    private $tabMembresGroupe;
    
    /**
     * @ORM\Column(name="tab_trophe", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\Trophe")
     * @ORM\JoinColumn(name="tab_trophe", referencedColumnName="id")
     */

    /**
     *
     * @var type text
     */
    protected $adresse;

    /**
     * @var integer
     */
    protected $tel;

    /**
     * @var integer
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