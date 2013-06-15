<?php

namespace LBcrew\UserBundle\Entity;
use FOS\UserBundle\Entity\User as FosBaseUser;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseUser
 *
 * @ORM\Entity
 * @ORM\Table(name="base_user")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "ecole" = "Ecole", "groupe" = "Groupe" })
 * 
 * @ORM\Entity(repositoryClass="LBcrew\UserBundle\Entity\BaseUserRepository")
 */
abstract class BaseUser extends FosBaseUser
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
     * @ORM\OneToOne(targetEntity="LBcrew\UserBundle\Entity\avatar")
     * @ORM\joinColumn(name="id", referencedColumnName="id")
     */
    protected $avatar;
    
    /**
     * @ORM\Column(name="site", type="string")
     *
     * @var type string
     */
    protected $siteWeb;

}
