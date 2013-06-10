<?php

namespace LBcrew\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categories
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\UserBundle\Entity\categoriesRepository")
 */
class categories
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
     * @ORM\Column(name="categorie_user", type="string")
     * 
     * @var type string
     */
    private $categorie_user;

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
     * Set categorie_user
     *
     * @param string $categorieUser
     * @return categories
     */
    public function setCategorieUser($categorieUser)
    {
        $this->categorie_user = $categorieUser;
    
        return $this;
    }

    /**
     * Get categorie_user
     *
     * @return string 
     */
    public function getCategorieUser()
    {
        return $this->categorie_user;
    }
}