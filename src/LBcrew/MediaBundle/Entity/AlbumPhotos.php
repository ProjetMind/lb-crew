<?php

namespace LBcrew\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LBcrew\MediaBundle\Entity\AlbumPhotos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MediaBundle\Entity\AlbumPhotosRepository")
 */
class AlbumPhotos
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
     * @var string $nom_album_photo
     *
     * @ORM\Column(name="nom_album_photo", type="string", length=100)
     */
    private $nomAlbumPhoto;
    
    /**
     *
     * @var type integer
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\UserBundle\Entity\User")
     * @ORM\joinColumn(name="id_user", referencedColumnName="id")
     */
    private $idUser;
    
    /**
     *
     * @var type Array
     * @ORM\Column(name="tab_photos", type="array")
     * @ORM\OneToMany(targetEntity="LBcrewMediaBundle\Entity\Photo")
     * @ORM\joinColumn(name="id_photo", referencedColumnName="id")
     */
    private $tabPhotos;


}