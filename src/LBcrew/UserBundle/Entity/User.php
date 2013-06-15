<?php
// src/LBcrew/UserBundle/Entity/User.php
 
namespace LBcrew\UserBundle\Entity;
 
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use LBcrew\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * 
 * @UniqueEntity(fields = "username", targetClass = "LBcrew\UserBundle\Entity\BaseUser", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "LBcrew\UserBundle\Entity\BaseUser", message="fos_user.email.already_used")
 * 
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     *
     * @ORM\Column(name="user_nom", type="text", length=50)
     * @ORM\Column(type="string", length=50)
     */
    protected $userNom;
    
    /**
     *
     * @ORM\Column(name="user_prenom", type="text", length=50)
     * @ORM\Column(type="string", length=50)
     */
    protected $userPrenom;
    
    /**
     * @ORM\Column(name="tab_ecole", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\Ecole")
     * @ORM\JoinColumn(name="tab_ecole", referencedColumnName="id")
     */
    private $tabEcole;

    
    
}