<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
use src\Model\PostManager;

class ApiListController extends AbstractController {

    public function Lister() {

        $postManager = new PostManager(Bdd::getInstance());
        $dataPosts = $postManager->getList5();
        

        echo $this->twig->render('Post/list5.html.twig');
       
    }

}