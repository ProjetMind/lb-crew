<?php

namespace LBcrew\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LBcrew\MediaBundle\Entity\GenreEvenement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MediaBundle\Entity\GenreEvenementRepository")
 */
class GenreEvenement
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nom_genre_evenement
     *
     * @ORM\Column(name="nom_genre_evenement", type="string", length=150)
     */
    private $nomGenreEvenement;


    
}