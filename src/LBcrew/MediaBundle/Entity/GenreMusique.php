<?php

namespace LBcrew\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LBcrew\MediaBundle\Entity\GenreMusique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MediaBundle\Entity\GenreMusiqueRepository")
 */
class GenreMusique
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
     * @var string $nom_genre_musique
     *
     * @ORM\Column(name="nom_genre_musique", type="string", length=150)
     */
    private $nomGenreMusique;


   
}