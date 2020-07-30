<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Category;
use Source\Models\Branch;
use Source\Models\News;
use Source\Models\Live;
use Source\Models\Ad;

class Web
{
    private $view;

    public function __construct(){
        $this->view = Engine::create(__DIR__."/../../Templates/User","php");
    }

    public function home($data){
        $cats = (new Category)->find()->fetch(true);
        $branches = (new Branch)->find()->fetch(true);
        $ads = (new Ad)->find()->fetch(true);

        $rdpcats = (new Category)->find()->fetch(true);
        $rdpbranches = (new Branch)->find()->fetch(true);

        $recent_news = (new News)->find()->limit(5)->order("updated_at DESC")->fetch(true);
        $news = (new News)->find()->limit(10)->order("updated_at DESC")->fetch(true);

        echo $this->view->render("home.php",[
            "title" => "Home | ". SITE,
            "cats" => $cats,
            "branches" => $branches,
            "carr_news" => $recent_news,
            "news" => $news,
            "rdpcats" => $rdpcats,
            "rdpbranches" => $rdpbranches,
            "ads" => $ads
        ]);
    }

    public function regionNews($data){
        $cats = (new Category)->find()->fetch(true);
        $branches = (new Branch)->find()->fetch(true);
        $rdpcats = (new Category)->find()->fetch(true);
        $rdpbranches = (new Branch)->find()->fetch(true);
        $ads = (new Ad)->find()->fetch(true);

        $branch_name = (new Branch)->findById($data["branch"])->name;

        $recent_news = (new News)->find("branch=:b","b={$data["branch"]}")->limit(5)->order("updated_at DESC")->fetch(true);
        $news = (new News)->find("branch=:b","b={$data["branch"]}")->limit(10)->order("updated_at DESC")->fetch(true);


        echo $this->view->render("home.php",[
            "title" => "Home | ". SITE,
            "cats" => $cats,
            "branches" => $branches,
            "carr_news" => $recent_news,
            "news" => $news,
            "actual_branch" => $branch_name,
            "branch_id" => $data["branch"],
            "rdpcats" => $rdpcats,
            "rdpbranches" => $rdpbranches,
            "ads" => $ads
        ]);
    }

    public function categoryNews($data){
        $cats = (new Category)->find()->fetch(true);
        $branches = (new Branch)->find()->fetch(true);
        $ads = (new Ad)->find()->fetch(true);

        $branch_name = (new Branch)->findById($data["branch"])->name;
        $category_name = (new Category)->findById($data["category"])->description;

        $recent_news = (new News)->find("branch=:b AND category=:c","b={$data["branch"]}&c={$data["category"]}")->order("updated_at DESC")->fetch(true);

        echo $this->view->render("homeCategory.php",[
            "title" => "Home | ". SITE,
            "cats" => $cats,
            "branches" => $branches,
            "news" => $recent_news,
            "actual_branch" => $branch_name,
            "branch_id" => $data["branch"],
            "cat_id" => $data["category"],
            "actual_category" => $category_name,
            "rdpcats" => $cats,
            "rdpbranches" => $branches,
            "ads" => $ads
        ]);

    }

    public function newsDetails($data){
        $news = new News;
        $req = $news->findById($data["news_id"]);
        $cat = (new Category)->findById($req->category);
        $bnc = (new Branch)->findById($req->branch);
        $ads = (new Ad)->find()->limit(3)->fetch(true);

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
            "others" => $others,
            "ads" => $ads
        ]);
    }

    public function shareLives($data){
        $lives = (new Live)->find()->fetch(true);
        $cats = (new Category)->find()->fetch(true);
        $branches = (new Branch)->find()->fetch(true);

        echo $this->view->render("lives.php",[
            "title" => "Lives | ". SITE,
            "lives" => $lives,
            "cats" => $cats,
            "branches" => $branches
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