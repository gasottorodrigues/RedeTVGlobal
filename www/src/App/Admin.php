<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Category;

class Admin
{
    public function __construct(){
        $this->view = Engine::create(__DIR__."/../../Templates/Admin","php");
    }

    public function home($data){
        echo $this->view->render("home.php",[
            "title"=> "Admin Home | ". SITE
        ]);
    }

    public function viewCategories($data){
        $categories = (new Category)->find()->fetch(1);

        echo $this->view->render("categories.php",[
            "title"=> "Categorias| ". SITE,
            "cats" => $categories
        ]);
    }

    public function newCategory($data){
        echo $this->view->render("newcategory.php",[
            
        ]);
    }

    public function saveCategory($data){
        $cat = new Category;
        $cat->add($data["desc"]);

        if($cat->fail()){
            echo"Algo deu errado :(";
            echo $cat->fail()->getMessage();
            die();
        }

        header("Location:". BASE_URL . "/admin/categorias");
    }
}

?>