<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
use src\Model\PostManager;
use src\Model\user;

class RedacteurPostController extends AbstractController{

    public function __construct()
    {
        parent::__construct();
        $authentication = new LoginController();
        if(!$authentication->RoleNeeded('redacteur')){
            header('Location: /Login/Form');
        }
    }

    public function index(){
        $this->List();
    }

    public function List(){
        $postManager = new PostManager(Bdd::getInstance());
        if($_POST){
            $dataPosts = $postManager->getBy('titre',$_POST['search'] );
        }else{
            $dataPosts = $postManager->getAll();
        }
        $user = new user (Bdd::getInstance());
        $nom = $user->getNomSession();
        echo $this->twig->render('RedacteurPost/list.html.twig',compact('nom'),[
            'dataPosts' => $dataPosts
        ]);

    }

}