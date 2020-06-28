<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;

class Web
{
    private $view;

    public function __construct(){
        $this->view = Engine::create(__DIR__."/../../Templates/User","php");
    }

    public function home($data){
        echo $this->view->render("home.php",[
            "title" => "Homepage | ". SITE
        ]);
        // header("Location:". BASE_URL . "/admin");
    }

    public function error($data){
        echo $this->view->render("error.php",[
            "title"=> "Erro {$data["errcode"]}| ". SITE,
            "errcode"=>$data["errcode"]
        ]);
    }

}

?>