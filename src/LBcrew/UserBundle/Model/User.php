<?php

namespace LBcrew\UserBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * LBcrew\MediaBundle\Model\media
 *
 * @ORM\MappedSuperclass
 */
abstract class User extends BaseUser{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
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

?>
