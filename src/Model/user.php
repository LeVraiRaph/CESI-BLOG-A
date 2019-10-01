<?php
namespace src\Model;
use src\Model\Bdd;
class user {

    protected $id;
    protected $mail;
    protected $password;



    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function add()
    {
        var_dump($this);
        $bdd = Bdd::getInstance();
        $requete = $bdd->prepare('INSERT INTO utilisateurs (mail, password) VALUES(:mail, :password)');
        $requete->execute([
            'mail' => $this->getMail()
            ,'password' => $this->getPassword()

        ]);
    }
}