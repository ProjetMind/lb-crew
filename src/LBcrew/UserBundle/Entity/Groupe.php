<?php

namespace LBcrew\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LBcrew\UserBundle\Model\User as BaseModelUser;

/**
 * Groupe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\UserBundle\Entity\GroupeRepository")
 */
class Groupe extends BaseModelUser
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