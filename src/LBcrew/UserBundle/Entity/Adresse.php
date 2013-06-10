<?php

namespace LBcrew\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdresseEcole
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\UserBundle\Entity\AdresseRepository")
 */
class Adresse
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
     * @ORM\Column(name="adresse", type="string")
     * @var type string
     */
    private $adresse;
    
    /**
     *@ORM\Column(name="cp", type="integer")
     * @var type integer
     */
    private $cp;
    
    /**
     *@ORM\Column(name="ville", type="integer")
     * @var type string
     */
    private $ville;
    
    /**
     * @ORM\Column(name="id_user", type="integer")
     * @var type integer
     */
    private $idProp;
    
    /**
     * @ORM\Column(name="type_user", type="smallint")
     * @var type smallint
     */
    private $typeProp;


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
     * Set adresse
     *
     * @param string $adresse
     * @return Adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     * @return Adresse
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return integer 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param integer $ville
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return integer 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return Adresse
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set type_user
     *
     * @param integer $typeUser
     * @return Adresse
     */
    public function setTypeUser($typeUser)
    {
        $this->type_user = $typeUser;
    
        return $this;
    }

    /**
     * Get type_user
     *
     * @return integer 
     */
    public function getTypeUser()
    {
        return $this->type_user;
    }

    /**
     * Set idProp
     *
     * @param integer $idProp
     * @return Adresse
     */
    public function setIdProp($idProp)
    {
        $this->idProp = $idProp;
    
        return $this;
    }

    /**
     * Get idProp
     *
     * @return integer 
     */
    public function getIdProp()
    {
        return $this->idProp;
    }

    /**
     * Set typeProp
     *
     * @param integer $typeProp
     * @return Adresse
     */
    public function setTypeProp($typeProp)
    {
        $this->typeProp = $typeProp;
    
        return $this;
    }

    /**
     * Get typeProp
     *
     * @return integer 
     */
    public function getTypeProp()
    {
        return $this->typeProp;
    }
}