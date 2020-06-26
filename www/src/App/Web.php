<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;

class Web
{
    private $view;

    public function __construct(){

        $this->view = Engine::create(__DIR__."/../../Templates","php");
    }

    public function home($data){
        $users = (new User())->find()->fetch(true);
        echo $this->view->render("home.php",[
            "title"=> "Home | ". SITE,
            "users"=> $users
        ]);
    }

    public function contact($data){
        echo "<h1>Contato</h1>";
    }
    public function error($data){
        echo"<h1>Erro {$data["error"]}</h1>";
    }
}

?>