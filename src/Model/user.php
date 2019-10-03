<?php
namespace src\Model;
use src\Model\Bdd;
class user {

    protected $id;
    protected $mail;
    protected $password;
    protected $nom;
    protected $prenom;
    protected $role;



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

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

     /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }





    public function add()
    {
        var_dump($this);
        $bdd = Bdd::getInstance();
        $requete = $bdd->prepare('INSERT INTO utilisateurs (Mail, Password) VALUES(:Mail, :Password)');
        $requete->execute([
            'Mail' => $this->getMail()
            ,'Password' => $this->getPassword()
        ]);
    }

    public function checkLogin()
    {
        $bdd = Bdd::getInstance();
        $requete = $bdd->prepare('SELECT Password FROM utilisateurs WHERE Mail = :Mail');
        $requete->execute(['Mail' => $this->getMail()]);
        $datas = $requete->fetch();
        if ($this->getPassword() == $datas['Password']) {
            return true;
        } else {
            return false;
        }
    }


    public function checkRole()
    {
        $bdd = Bdd::getInstance();
        $requete = $bdd->prepare('SELECT Role FROM utilisateurs WHERE Mail = :Mail');
        $requete->execute(['Mail' => $this->getMail()]);
        $datas = $requete->fetch();
        return $datas['Role'];
    }


    public function getNomSession()
    {
        $bdd = Bdd::getInstance();
        $mailsession = $_SESSION["login"]["mail"];
        $requete = $bdd->prepare('SELECT * FROM utilisateurs WHERE Mail = :Mailsession');
        $requete->execute(['Mailsession' => $mailsession]);
        $nomsession = $requete->fetch();
        return $nomsession['Nom'];
    }

    public function getPrenomSession()
    {
        $bdd = Bdd::getInstance();
        $mailsession = $_SESSION["login"]["mail"];
        $requete = $bdd->prepare('SELECT * FROM utilisateurs WHERE Mail = :Mailsession');
        $requete->execute(['Mailsession' => $mailsession]);
        $prenomsession = $requete->fetch();
        return $prenomsession['Prenom'];
    }

    public function getRoleSession()
    {
        $bdd = Bdd::getInstance();
        $mailsession = $_SESSION["login"]["mail"];
        $requete = $bdd->prepare('SELECT * FROM utilisateurs WHERE Mail = :Mailsession');
        $requete->execute(['Mailsession' => $mailsession]);
        $rolesession = $requete->fetch();
        return $rolesession['Role'];
    }
    
}