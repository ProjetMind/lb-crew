<?php

namespace LBcrew\MediaBundle\Entity;

use LBcrew\MediaBundle\Model\media as Media;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LBcrew\MediaBundle\Entity\Musique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MediaBundle\Entity\MusiqueRepository")
 */
class Musique extends Media
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    protected $titreMedia;

    protected $datePubMedia;

    protected $nbVueMedia;
    
    protected $descripMedia;
    
    /**
     * @var string $artistemusique
     *
     * @ORM\Column(name="artiste_musique", type="string", length=100)
     */
    private $artisteMusique;

    /**
     * @var string $albumMusique
     *
     * @ORM\Column(name="album_musique", type="string", length=100)
     */
    private $albumMusique;

    /**
     * @var float $dureeMusique
     *
     * @ORM\Column(name="duree_musique", type="decimal")
     */
    private $dureeMusique;

    /**
     *
     * @ORM\Column(name="genre_musique", type="array")
     * @ORM\ManyToMany(targetEntity="LBcrew\MediaBundle\Entity\GenreMusique")
     * @ORM\JoinColumn(name="id_genre", referencedColumnName="id")
     */
    private $genresMusique;
    
    /**
     * 
     * @ORM\Column(name="id_covert_musique", type="string")
     * @ORM\OneToOne(targetEntity="LBcrew\MediaBundle\Entity\Photo")
     * @ORM\JoinColumn(name="id_covert_musique", referencedColumnName="id")
     */
    private $idCovertMusique;


    
}