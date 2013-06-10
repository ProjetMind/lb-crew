<?php

namespace LBcrew\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LBcrew\MediaBundle\Entity\GenreVideo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MediaBundle\Entity\GenreVideoRepository")
 */
class GenreVideo
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
     * @var string $nom_genre_video
     *
     * @ORM\Column(name="nom_genre_video", type="string", length=150)
     */
    private $nomGenreVideo;

}