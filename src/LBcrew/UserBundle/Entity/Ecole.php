<?php

namespace LBcrew\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LBcrew\UserBundle\Model\User as BaseModelUser;

/**
 * Ecole
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\UserBundle\Entity\EcoleRepository")
 */
class Ecole extends BaseModelUser
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