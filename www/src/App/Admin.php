<?php
namespace Source\App;

use League\Plates\Engine;
use Source\Models\Category;
use Source\Models\Branch;
use Source\Models\User;

class Admin
{
    private $view;

    public function __construct(){
        $this->view = Engine::create(__DIR__."/../../Templates/Admin","php");
    }

    public function login($data){
        echo $this->view->render("login.php",["title"=> "Login | ". SITE]);
    }

    public function checkLogin($data){
        session_start();
        $user = new User();
        $email = $data["email"];
        $passwd = md5($data["passwd"]);

        if($user->login($email,$passwd)){
            $_SESSION["globaltv_user"] = 1;
            header("Location:". url("admin/"));
        }
    }

    public function logout($data){
        session_start();
        session_destroy();
        header("Location:". url(""));
    }

    public function isLogged(){
        session_start();

        if(isset($_SESSION["globaltv_user"])){
            return 1;
        }else{
            return 0;
        }
    
    }

    public function home($data){
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }
        echo $this->view->render("home.php",["title"=> "Admin Home | ". SITE]);
    }

    public function viewUsers($data){
        $users = (new User())->find()->fetch(1);
        echo $this->view->render("users.php",[
            "title"=> "Usuários | ". SITE,
            "users" => $users
        ]);
    }

    public function newUser($data){
        echo $this->view->render("newuser.php",["title"=> "Novo usuário | ". SITE]);
    }

    public function saveUser($data){
        $nick = $data["nickname"];
        $email = $data["email"];
        $pass = md5($data["passwd"]);

        $user = new User();
        $user->add($nick,$email,$pass);

        if($user->fail()){
            echo "Algo deu errado :( <br>";
            echo $user->fail()->getMessage();
            die();
        }

        header("Location:".url("admin/usuarios"));
    }

    public function removeUser($data){
        $user = new User;
        $user->remove($data["user_id"]);

        header("Location:".url("admin/usuarios"));
    }

    //CATEGORIES
    public function viewCategories($data){
        $categories = (new Category)->find()->fetch(true);

        echo $this->view->render("categories.php",[
            "title"=> "Categorias | ". SITE,
            "cats" => $categories
        ]);
    }

    public function newCategory($data){
        echo $this->view->render("newcategory.php",[]);
    }

    public function saveCategory($data){
        $cat = new Category;
        $cat->add($data["desc"]);

        if($cat->fail()){
            echo"Algo deu errado :(";
            echo $cat->fail()->getMessage();
            die();
        }

        header("Location:". url("/admin/categorias"));
    }

    public function removeCategory($data){
        $cat = new Category;
        $cat->remove($data['cat_id']);

         header("Location:". url("/admin/categorias"));
    }

    //FILIAIS
    public function viewBranches($data){
        $branch = (new Branch)->find()->fetch(true);

        echo $this->view->render("branches.php",[
            "title"=> "Filiais | ". SITE,
            "branches" => $branch
        ]);
    }

    public function newBranch($data){
       echo $this->view->render("newbranch.php",[]);
    }

    public function saveBranch($data){
        $branch = new Branch;
        $branch->add($data["name"]);

        if($branch->fail()){
            echo"Algo deu errado :(";
            echo $branch->fail()->getMessage();
            die();
        }

        header("Location:". url("/admin/filiais"));
    }

    public function removeBranch($data){
        $branch = new Branch;
        $branch->remove($data['branch_id']);

            header("Location:". url("/admin/filiais"));
    }
 
}

?>