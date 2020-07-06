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

    public function regionNews($data){
        $cats = (new Category)->find()->fetch(true);
        $branches = (new Branch)->find()->fetch(true);

        $branch_name = (new Branch)->findById($data["branch"])->name;

        $recent_news = (new News)->find("branch=:b","b={$data["branch"]}")->limit(5)->order("updated_at DESC")->fetch(true);

        echo $this->view->render("home.php",[
            "title" => "Homepage | ". SITE,
            "cats" => $cats,
            "branches" => $branches,
            "news" => $recent_news,
            "actual_branch" => $branch_name,
            "branch_id" => $data["branch"],
        ]);
    }

    public function categoryNews($data){
        $cats = (new Category)->find()->fetch(true);
        $branches = (new Branch)->find()->fetch(true);

        $branch_name = (new Branch)->findById($data["branch"])->name;
        $category_name = (new Category)->findById($data["category"])->description;

        $recent_news = (new News)->find("branch=:b AND category=:c","b={$data["branch"]}&c={$data["category"]}")->order("updated_at DESC")->fetch(true);

        echo $this->view->render("homeCategory.php",[
            "title" => "Homepage | ". SITE,
            "cats" => $cats,
            "branches" => $branches,
            "news" => $recent_news,
            "actual_branch" => $branch_name,
            "branch_id" => $data["branch"],
            "cat_id" => $data["category"],
            "actual_category" => $category_name
        ]);

    }

    public function newsDetails($data){
        $news = new News;
        $req = $news->findById($data["news_id"]);
        $cat = (new Category)->findById($req->category);
        $bnc = (new Branch)->findById($req->branch);

        $cats = (new Category)->find()->fetch(true);
        $branches = (new Branch)->find()->fetch(true);

        $branch_name = (new Branch)->findById($data["branch"])->name;

        $others = (new News)->find("branch=:b AND news_id!=:id","b={$req->branch}&id={$req->news_id}")->limit(3)->order("updated_at DESC")->fetch(1);

        echo $this->view->render("news.php",[
            "title" =>$req->title."|" . SITE,
            "news" => $req,
            "cats" => $cats,
            "branches" => $branches,
            "actual_branch" => $branch_name,
            "branch_id" => $data["branch"],
            "category" => $cat->description,
            "cat_id" => $data["category"],
            "branch" => $bnc->name,
            "others" => $others
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