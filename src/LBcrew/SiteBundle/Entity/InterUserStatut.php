<?php

namespace LBcrew\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterUserStatut
 *
 * @ORM\Table(name="inter_user_statut")
 * @ORM\Entity(repositoryClass="LBcrew\SiteBundle\Entity\InterUserStatutRepository")
 */
class InterUserStatut
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @var type integer
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\OneToOne(targetEntity="LBcrew\UserBundle\Entity\User")
     * @ORM\joinColumn(name="user_id", referencedColumnName="id")
     * 
     */
    private $userId;
    
    /**
     *
     * @var type integer
     * @ORM\Column(name="statut_id", type="integer", nullable=false)
     * @ORM\OneToOne(targetEntity="LBcrew\SiteBundle\Entity\UserStatut")
     * @ORM\joinColumn(name="statut_id", referencedColumnName="id")
     */
    private $statutId;
   
}
