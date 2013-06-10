<?php

namespace LBcrew\MediaBundle\Entity;

use LBcrew\MediaBundle\Model\Media as Media;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LBcrew\MediaBundle\Entity\video
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MediaBundle\Entity\VideoRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Video extends Media
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
     * @Assert\File(maxSize="6000000000", 
     *     mimeTypes={"video/flv", "video/x-flv", "video/mp4"},
     *     mimeTypesMessage = "Ce format de video n'est pas autorisé.",
     *     uploadIniSizeErrorMessage = "Le fichier dépasse la taille définit par upload_max_filesize dans PHP.ini.",
     *     uploadFormSizeErrorMessage = "Le fichier dépasse la taille définit dans le formulaire.",
     *     uploadErrorMessage = "Pour une raison inconnue le fichier n'a pu être télécharger.",
     *     maxSizeMessage = "Le fichier est trop volumineux. La taille limite est de 1024MO(1 giga)."
     * )
     * 
     */
    public $file;
    
    /**
     * 
     * @ORM\Column(name="nom_fichier_video", type="string", length=255, nullable=true)
     * 
     */
    private $nom_fichier_video;
    
    /**
     * 
     *@ORM\Column(name="genre_video", type="array", nullable=true)
     *@ORM\ManyToMany(targetEntity="LBcrew\MediaBundle\Entity\GenreVideo")
     *@ORM\JoinColumn(name="id_genre", referencedColumnName="id")
     */
    private  $genres_video;

    public function getAbsoluteCheminDossier()
    {
        return null === $this->nom_fichier_video ? null : $this->getUploadRootDir().'/'.$this->nom_fichier_video;
    }

    public function getCheminWeb()
    {
        return null === $this->nom_fichier_video ? null : $this->getUploadDir().'/'.$this->nom_fichier_video;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/vidéo dans la vue.
        return 'uploads/videos';
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // generation d'un nom unique pour la vidéo 
            $this->nom_fichier_video = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // s'il y a une erreur lors du déplacement du fichier, une exception
        // va automatiquement être lancée par la méthode move(). Cela va empêcher
        // proprement l'entité d'être persistée dans la base de données si
        // erreur il y a
        $this->file->move($this->getAbsoluteCheminDossier(), $this->nom_fichier_video);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsoluteCheminDossier()) {
            unlink($file);
        }
    }

}