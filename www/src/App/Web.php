<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Category;
use Source\Models\Branch;
use Source\Models\News;

class Web
{
    private $view;

    public function __construct(){
        $this->view = Engine::create(__DIR__."/../../Templates/User","php");
    }

    public function home($data){
        $cats = (new Category)->find()->limit(5)->fetch(true);
        $branches = (new Branch)->find()->limit(5)->fetch(true);

        $recent_news = (new News)->find()->limit(5)->order("updated_at DESC")->fetch(true);

        echo $this->view->render("home.php",[
            "title" => "Homepage | ". SITE,
            "cats" => $cats,
            "branches" => $branches,
            "news" => $recent_news
        ]);
    }

    public function newsDetails($data){
        $news = new News;
        $req = $news->findById($data["news_id"]);
        $cat = (new Category)->findById($req->category);
        $bnc = (new Branch)->findById($req->branch);
        echo $this->view->render("news.php",[
            "title" =>$req->title."|" . SITE,
            "news" => $req,
            "category" => $cat->description,
            "branch" => $bnc->name
        ]);
    }

    public function error($data){
        echo $this->view->render("error.php",[
            "title"=> "Erro {$data["errcode"]}| ". SITE,
            "errcode"=>$data["errcode"]
        ]);
    }

}

?>