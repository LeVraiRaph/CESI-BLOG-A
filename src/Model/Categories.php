<?php
namespace src\Model;

class Categories {
    private $Nom;

     /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $nom
     * @return Categories
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;
        return $this;
    }
}