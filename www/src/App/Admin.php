<?php
namespace Source\App;

use CoffeeCode\Uploader\Uploader;
use League\Plates\Engine;

use Source\Models\Category;
use Source\Models\Branch;
use Source\Models\User;
use Source\Models\News;

class Admin
{
    private $view;

    public function __construct(){
        $this->view = Engine::create(__DIR__."/../../Templates/Admin","php");
    }

    //Controladores de rotas de login do Administrador

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

    //Controlador da Home do Administrador

    public function home($data){
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }
        echo $this->view->render("home.php",[
            "title"=> "Admin Home | ". SITE,
        ]);
    }

    //Controlador das ações com usuários

    public function viewUsers($data){
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }
        $users = (new User())->find()->fetch(1);
        echo $this->view->render("users.php",[
            "title"=> "Usuários | ". SITE,
            "users" => $users
        ]);
    }

    public function newUser($data){
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }
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

        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

        $user = new User;
        $user->remove($data["user_id"]);

        header("Location:".url("admin/usuarios"));
    }

    //Controlador de ações com categorias

    public function viewCategories($data){

        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

        $categories = (new Category)->getAll();

        echo $this->view->render("categories.php",[
            "title"=> "Categorias | ". SITE,
            "cats" => $categories
        ]);
    }

    public function newCategory($data){
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

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

        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

        $cat = new Category;
        $cat->remove($data['cat_id']);

        header("Location:". url("/admin/categorias"));
    }

    //Controlador de ações com Filiais

    public function viewBranches($data){

        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

        $branch = (new Branch)->find()->fetch(true);

        echo $this->view->render("branches.php",[
            "title"=> "Filiais | ". SITE,
            "branches" => $branch
        ]);
    }

    public function newBranch($data){
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

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

        header("Location:". url("admin/regioes"));
    }

    public function removeBranch($data){

        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

        $branch = new Branch;
        $branch->remove($data['branch_id']);

        header("Location:". url("/admin/filiais"));
    }

    //Controladores de ações com notícias

    public function viewNews($data){
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

        $news = (new News)->find()->fetch(true);

        foreach($news as $new){
            $new->category = $new->categoryName();
            $new->branch = $new->branchName();
        }

        echo $this->view->render("news.php",[
            "title"=> "Notícias | ". SITE,
            "news" => $news
        ]);
    }

    public function alterNews($data)
    {
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

        $news = (new News)->findById($data["news_id"]);

        $cats = (new Category)->find()->fetch(true);
        $branches = (new Branch)->find()->fetch(true);

        echo $this->view->render("alternews.php",[
            "title"=> "Alterar Notícia | ". SITE,
            "cats" => $cats,
            "branches" => $branches,
            "news" => $news
        ]);
	}

    public function newNews($data)
    {
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }

        $cats = (new Category)->find()->fetch(true);
        $branches = (new Branch)->find()->fetch(true);


        echo $this->view->render("newnews.php",[
            "title" => "Nova notícia | ". SITE,
            "cats" => $cats,
            "branches" => $branches
        ]);
    }

    public function saveNews($data){
        $upload = new \CoffeeCode\Uploader\Image("uploads","images");
        $files = $_FILES;

        if(!empty($files["thumb"])){
            $file = $files["thumb"];
        
            if(empty($file["type"]) || !in_array($file["type"],$upload::isAllowed())){
                echo "Sem imagem ou imagem inválida para a thumb! <br><a href='".url("admin/noticias/nova")."'>Voltar</a>"; 
                die();
            }else{
                $url = $upload->upload($file,pathinfo($file["name"], PATHINFO_FILENAME),1920);
            }
        }

        $news = new News;
        $news->add($data["title"], $data["caption"],$data["content"],$url, $data["date"], $data["branch"], $data["category"]);


        /*if(!isset($data["news_id"])){
        
            if(!empty($files["thumb"])){
                $file = $files["thumb"];
        
                if(empty($file["type"]) || !in_array($file["type"],$upload::isAllowed())){
                    echo "Sem imagem ou imagem inválida para a thumb! <br><a href='".url("admin/noticias/nova")."'>Voltar</a>"; 
                    die();
                }else{
                    $url = $upload->upload($file,pathinfo($file["name"], PATHINFO_FILENAME),1920);
                }
            }
            
            $news = new News;
            $news->add($data["title"], $data["caption"],$data["content"],$url, $data["date"], $data["branch"], $data["category"]);
                    //preg_replace('/&nbsp;/','  ',$data["content"])
            
            if($news->fail()){
                $news->fail()->getMessage();
            }
        }else{
            if(!empty($files["thumb"])){
                $file = $files["thumb"];
                if(!empty($file["type"]) && in_array($file["type"],$upload::isAllowed())){
                    $url = $upload->upload($file,pathinfo($file["name"], PATHINFO_FILENAME),1920);
                }
            }

            $news = new News;
            if(!isset($url)){
                $news->alter($data["news_id"],$data["title"], $data["caption"], preg_replace('/&nbsp;/','  ',$data["content"]),null, $data["category"], $data["branch"],$data["date"]);
            }else{
                $news->alter($data["news_id"],$data["title"], $data["caption"], preg_replace('/&nbsp;/','  ',$data["content"]),$url, $data["category"], $data["branch"],$data["date"]);
            }

            if($news->fail()){
                $news->fail()->getMessage();
            }
        }*/
        header("Location:". url("admin/noticias"));
    }

    public function removeNews($data){
        if(!$this->isLogged()){
            header("Location:".url("admin/login"));
        }
      
        $news = new News;
        $news->remove($data["news_id"]);

        header("Location:". url("/admin/noticias"));
    }
}
?>
