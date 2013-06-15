<?php

namespace LBcrew\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserStatut
 *
 * @ORM\Table(name="user_statut")
 * @ORM\Entity(repositoryClass="LBcrew\SiteBundle\Entity\UserStatutRepository")
 */
class UserStatut
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
     * @var type text
     * 
     * @ORM\Column(name="libelle_statut", type="text")
     */
    private $libelleStatut;
}
