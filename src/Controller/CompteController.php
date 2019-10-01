<?php
namespace src\Controller;

class CompteController extends AbstractController {

    public function compte(){
        $result = null;

        echo $this->twig->render('Compte/compte.html.twig');
        //require $_SERVER['DOCUMENT_ROOT'].'/../templates/Contact/send.html.php';
    }
}