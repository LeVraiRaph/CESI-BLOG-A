<?php
namespace src\Controller;
use src\Model\user;
class LoginController extends AbstractController {

    /**
     * Formulaire de connexion
     */
    public function Form(){
        $arrayRememberMe = array('','');
        if(isset($_COOKIE["rememberMeLogin"])){
            $arrayRememberMe = json_decode($_COOKIE["rememberMeLogin"]);
        }

        echo $this->twig->render('Login/form.html.twig',[
            'arrayRememberMe' => $arrayRememberMe
        ]);

    }

    /**
     * Formulaire d'inscription
     */
    public function Register(){
        if($_POST){
            $user = new user();
            $user->setMail($_POST['Mail']);
            $user->setPassword($_POST['Password']);
            $user->add();
            header('Location: /Login/Form');
        }

        echo $this->twig->render('Login/register.html.twig');

    }
    /**
     * Vérification du user / mdp
     */
    public function Check(){
        if($_POST){
            $user = new user();
            $user->setMail($_POST['Mail']);
            $user->setPassword($_POST['Password']);
            $result = $user->checkLogin();
            if ($result = true) {
                $resultrole = $user->checkRole();
                $_SESSION['login']['role'] = [$resultrole];
                switch ($resultrole) {
                    case "admin":
                        header('Location: /AdminPost/List');
                        break;
                    case "user":
                        header('Location: /Post/List');
                        break;
                    case "redacteur":
                        header('Location: /RedacteurPost/List');
                        break;
                    default:
                        header('Location: /Login/Form');
                }
            } else {
                header('Location: /Error');
            }

        } else{
            throw new \Exception('Absence de formulaire pour cette action !');
        }

    }


    /**
     * Logout de l'application
     */
    public function Logout(){
        unset($_SESSION['login']);
        header('Location: /');
    }

    /** Retourne TRUE si l'utilisateur a le role attendu par $role
     * @param $role
     * @return bool
     */
    public function RoleNeeded($role){
        unset($_SESSION['errorlogin']);
        if(isset( $_SESSION['login'])){
            if(!in_array($role, $_SESSION['login']['role'])){
                $errMsg = "Vous n'avez pas le role ".$role;
                $_SESSION['errorlogin'] = $errMsg;
                return false;
            }else{
                return true;
            }
        }else{
            $errMsg = "Accès interdit sans authentification";
            $_SESSION['errorlogin'] = $errMsg;
            var_dump('03');
            return false;
        }

    }

      
}