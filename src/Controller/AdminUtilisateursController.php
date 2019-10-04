<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
use src\Model\user;
use src\Model\userManager;
use src\Model\PostManager;

class AdminUtilisateursController extends AbstractController {

    public function __construct()
    {
        parent::__construct();
        $authentication = new LoginController();
        if(!$authentication->RoleNeeded('admin')){
            header('Location: /Login/Form');
        }
    }
 
    public function index(){
        $this->ListUser();
    }

    public function ListUser(){

        $userManager = new userManager (Bdd::getInstance());
        $dataUsers = $userManager->getListUsers();
       var_dump($dataUsers);
       die();
        echo $this->twig->render('AdminUser/list.html.twig',[
            'dataUsers' => $dataUsers
        ]);
    }









    public function View($id){
        if($id<>''){
            $userManager = new userManager(Bdd::getInstance());
            $user = $userManager->get($id);

            echo $this->twig->render('AdminUser/view.html.twig',[
                'user' => $user
            ]);

        }else{
            throw new \Exception('Il manque un ID pour cette action !');
        }

    }

  


    public function edit($id){
        if($_POST){
            $sqlRepository = null;
            $nomImage = null;
            if(!empty($_FILES['postImage']['name']) )
            {

                $tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
                // Recuperation de l'extension du fichier
                $extension  = pathinfo($_FILES['postImage']['name'], PATHINFO_EXTENSION);
                // On verifie l'extension du fichier
                if(in_array(strtolower($extension),$tabExt))
                {
                    // On renomme le fichier
                    $nomImage = md5(uniqid()) .'.'. $extension;
                    // Création du répertoire d'acceuil
                    $dateNow = new \DateTime();
                    $sqlRepository = $dateNow->format('Y/m');
                    $repository = $_SERVER['DOCUMENT_ROOT'].'/uploads/images/'.$dateNow->format('Y/m');
                    if(!is_dir($repository)){
                        mkdir($repository,0777,true);
                    }
                    move_uploaded_file($_FILES['postImage']['tmp_name'], $repository.'/'.$nomImage);
                    // suppression ancienne image si existante
                    if(strlen($_POST['postImageFull'])>1){
                        unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/images/'.$_POST['postImageFull']);
                    }

                }
            }
            if($_SESSION['token'] == $_POST['token']) {
                // Soumission du formulaire
                $userManager = new userManager(Bdd::getInstance());
                $user = new user([
                    "Titre" => $_POST['postTitre']
                    , "Description" => $_POST['postDescription']
                    , "DateAjout" => $_POST['postDate']
                    , "Auteur" => $_POST['postAuteur']
                    , "ImageRepository" => $sqlRepository
                    , "ImageFileName" => $nomImage
                    , "id" => $_POST['postId']
                ]);
                $result = $userManager->update($user);
                if ($result['retourCode'] == 0) {
                    $update = true; // pour pouvoir rééexécuter la requete de lecture
                }
            }

        }else{
            // Génération du TOKEN (celui ne doit pas être généré lors du post sinon il ne sera jamais identique
            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
        }


        if($_GET  OR $update) {
            $userManager = new userManager(Bdd::getInstance());
            $user = $userManager->get($id);
        }else {
            throw new \Exception('Absence de paramètre pour cette action !');
        }

        echo $this->twig->render('AdminUser/edit.html.twig',[
            'user' => $user
        ]);
    }

    public function Delete($id){
        if($id<>''){
            $userManager = new userManager(Bdd::getInstance());
            $user = $userManager->get($id);
            $userManager->delete($user);

            header('Location: /AdminUser/List');
        }else{
            throw new \Exception('Il manque un ID pour cette action !');
        }

    }





}