<?php

namespace LBcrew\MediaBundle\Entity;

use LBcrew\MediaBundle\Model\Media as Media;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LBcrew\MediaBundle\Entity\photo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MediaBundle\Entity\PhotoRepository")
 */
class Photo extends Media
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
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string $alt
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
     * 
     * @ORM\Column(name="id_album_photo", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\MediaBundle\Entity\AlbumPhotos")
     * @ORM\JoinColumn(name="id_album_photo", referencedColumnName="id")
     */
    private $albumPhoto;

}