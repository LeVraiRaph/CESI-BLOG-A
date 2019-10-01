<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Post;
use src\Model\PostManager;

class ApiListController {

    public function lister(x){
        $request="SELECT * from posts ORDER BY date DESC LIMIT x"
        GET token->$tokenget;
        if ($tokenget == $tokenBDD) {
            var_dump(result);
        } else {
            echo "token invalide";
        }
    }

}