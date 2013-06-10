<?php

namespace LBcrew\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trophe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\UserBundle\Entity\TropheRepository")
 */
class Trophe
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
     * @var string
     *
     * @ORM\Column(name="nom_trophe", type="string", length=255)
     */
    private $nomTrophe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_obtention", type="date")
     */
    private $dateObtention;

    /**
     * @var string
     *
     * @ORM\Column(name="description_trophe", type="string", length=255)
     */
    private $descriptionTrophe;
    
    /**
     * @ORM\Column(name="id_user", type="integer")
     * 
     */
    private $idUser;
    
    /**
     * @ORM\Column(name="type_user", type="smallint")
     * 
     */
    private $typeUser;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomTrophe
     *
     * @param string $nomTrophe
     * @return Trophe
     */
    public function setNomTrophe($nomTrophe)
    {
        $this->nomTrophe = $nomTrophe;
    
        return $this;
    }

    /**
     * Get nomTrophe
     *
     * @return string 
     */
    public function getNomTrophe()
    {
        return $this->nomTrophe;
    }

    /**
     * Set dateObtention
     *
     * @param \DateTime $dateObtention
     * @return Trophe
     */
    public function setDateObtention($dateObtention)
    {
        $this->dateObtention = $dateObtention;
    
        return $this;
    }

    /**
     * Get dateObtention
     *
     * @return \DateTime 
     */
    public function getDateObtention()
    {
        return $this->dateObtention;
    }

    /**
     * Set descriptionTrophe
     *
     * @param string $descriptionTrophe
     * @return Trophe
     */
    public function setDescriptionTrophe($descriptionTrophe)
    {
        $this->descriptionTrophe = $descriptionTrophe;
    
        return $this;
    }

    /**
     * Get descriptionTrophe
     *
     * @return string 
     */
    public function getDescriptionTrophe()
    {
        return $this->descriptionTrophe;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Trophe
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set typeUser
     *
     * @param integer $typeUser
     * @return Trophe
     */
    public function setTypeUser($typeUser)
    {
        $this->typeUser = $typeUser;
    
        return $this;
    }

    /**
     * Get typeUser
     *
     * @return integer 
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }
}