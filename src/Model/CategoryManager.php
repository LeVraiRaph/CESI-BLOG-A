<?php
namespace src\Model;
use src\Model\Categories;

class CategoryManager {
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

    public function add(Categories $categories){
        try{
            $requete = $this->db->prepare('INSERT INTO categories (nom) VALUES(:nom)');
            $requete->execute([
                'nom' => $categories->getNom()
            
            ]);

            $return = [
                'retourCode' => 0
                ,'retourDesc' => '[OK] Insertion'
            ];
        }catch (\Exception $e){
            $return = [
                'retourCode' => 1
                ,'retourDesc' => '[ERROR] Insertion => '.$e->getMessage()
            ];
        }
        return $return;
    }

    public function delete(Categories $categories){
        try{
            $requete = $this->db->prepare('DELETE FROM categories WHERE nom=:nom');
            $requete->execute([
                'nom' => $categories->getnom()
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

    public function update(Categories $categories){
        try{
            $requete = $this->db->prepare('UPDATE categories set nom=:nom WHERE nom=:nom');
            $requete->execute([
                'nom' => $categories->getnom()
              
            ]);

            $return = [
                'retourCode' => 0
                ,'retourDesc' => '[OK] Mise à jour'
            ];
        }catch (\Exception $e){
            $return = [
                'retourCode' => 1
                ,'retourDesc' => '[ERROR] Mise à jour => '.$e->getMessage()
            ];
        }
        return $return;
    }

    public function get($id){
        $requete = $this->db->prepare('SELECT * FROM categories where categories = :categories');
        $requete->execute([
            'categoriesId' => $id
        ]);
        $donnees = $requete->fetch(\PDO::FETCH_ASSOC);
        return new Post($donnees);
    }

    public function getAll(){
        $categoryList = [];
        $requete = $this->db->prepare('SELECT * FROM categories');
        $requete->execute();
        while ($donnees = $requete->fetch(\PDO::FETCH_ASSOC))
        {
            $categorie = new Categories();
            $categorie->setNom($donnees['Nom']);
            $categoryList[] = $categorie;
        }

        return $categoryList;
    }

    /**
     * @param $field
     * @param $search
     * @return Post[]
     */
    public function getBy($field,$search):array {
        $posts = [];
        $requete = $this->db->prepare('SELECT * FROM  posts where '.$field.' like :keyword');
        $keyword = '%'.$search.'%';
        $requete->bindValue(':keyword', $keyword);
        $requete->execute();
        while ($donnees = $requete->fetch(\PDO::FETCH_ASSOC))
        {
            $posts[] = new Post($donnees);
        }

        return $posts;
    }

    
}