<?php
namespace src\Controller;
use src\Model\Bdd;
use src\Model\user;
class CompteController extends AbstractController {

    public function compte(){
        $result = null;
        $user = new user (Bdd::getInstance());
        $nom = $user->getNomSession();
        $prenom = $user->getPrenomSession();
        $role = $user->getRoleSession();
        echo $this->twig->render('Compte/compte.html.twig',compact('nom', 'prenom', 'role'));
        //require $_SERVER['DOCUMENT_ROOT'].'/../templates/Contact/send.html.php';
    }
}