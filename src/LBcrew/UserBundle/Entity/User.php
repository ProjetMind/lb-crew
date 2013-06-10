<?php
// src/LBcrew/UserBundle/Entity/User.php
 
namespace LBcrew\UserBundle\Entity;
 
use LBcrew\UserBundle\Model\User as BaseModelUser;
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseModelUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     *
     * @ORM\Column(type="string", length=50)
     */
    protected $userNom;
    
    /**
     *
     * @ORM\Column(type="string", length=50)
     */
    protected $userprenom;
    
    /**
     *
     * @ORM\Column(name="categorie", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\categorie")
     * @ORM\JoinColumn(name="categorie", referencedColumnName="id")
     */
    protected $categorie;
    
    /**
     * @ORM\Column(name="tab_ecole", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\Ecole")
     * @ORM\JoinColumn(name="tab_ecole", referencedColumnName="id")
     */
    private $tabEcole;

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