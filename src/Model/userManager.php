<?php
namespace src\Model;
use src\Model\Bdd;
use src\Model\user;

class userManager {

 /**
     * @var \PDO
     */
    private  $db; // instance PDO

    // Une connexion BDD est nécessaire
    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(\PDO $db)
    {
        $this->db = $db;
    }

    public function delete(user $user){
        try{
            $requete = $this->db->prepare('DELETE FROM utilisateurs WHERE Id=:id');
            $requete->execute([
                'id' => $user->getId()
            ]);

            $return = [
                'retourCode' => 0
                ,'retourDesc' => '[OK] Suppression'
            ];
        }catch (\Exception $e){
            $return = [
                'retourCode' => 1
                ,'retourDesc' => '[ERROR] Suppression => '.$e->getMessage()
            ];
        }
        return $return;
    }



    public function get($id){
        $requete = $this->db->prepare('SELECT * FROM utilisateurs where Id = :userId');
        $requete->execute([
            'userId' => $id
        ]);
        $donnees = $requete->fetch(\PDO::FETCH_ASSOC);
        return new user($donnees);
    }

   

    /**
     * @param $field
     * @param $search
     * @return user[]
     */
    public function getBy($field,$search):array {
        $users = [];
        $requete = $this->db->prepare('SELECT * FROM utilisateurs where '.$field.' like :keyword');
        $keyword = '%'.$search.'%';
        $requete->bindValue(':keyword', $keyword);
        $requete->execute();
        while ($donnees = $requete->fetch(\PDO::FETCH_ASSOC))
        {
            $users[] = new user($donnees);
        }

        return $users;
    }

    







public function getListUsers()
    {
        $users = [];
        
        $requete = $this->db->prepare('SELECT * FROM utilisateurs');
        $requete->execute();
        while ($donnees = $requete->fetch(\PDO::FETCH_ASSOC))
        {
            setNom();
            setPrenom();
            setRole();
            setValidationAdmin();
            $users[] = new user($donnees);
        }

        return $users;
    }


}