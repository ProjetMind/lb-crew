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
     * @ORM\OneToOne(targetEntity="LBcrew\UserBundle\Entity\avatar", cascade={"persist"})
     */
    protected $avatar;
    
    /**
     * @ORM\OneToOne(targetEntity="LBcrew\UserBundle\Entity\Adresse")
     * @ORM\JoinColumn(name="id_adresse", referencedColumnName="id")
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
     * @ORM\Column(name="site", type="string")
     *
     * @var type string
     */
    protected $siteWeb;
}

?>
