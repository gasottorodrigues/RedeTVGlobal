<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class News extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("news",["title","caption","content","thumb_url","date","branch","category"],"news_id");
    }
    public function categoryName(){
        return (new Category)->findById($this->category)->description;
    }
    public function branchName(){
        return (new Branch)->findById($this->branch)->name;
    }
    public function add(string $title, string $caption, string $content, string $thumb_url, $date, $branch, $category): News
    {
        $this->title = $title;
        $this->caption = $caption;
        $this->content = $content;
        $this->thumb_url = $thumb_url;
        $this->date = $date;
        $this->branch = $branch;
        $this->category = $category;    
        $this->save();

        return $this;
    }

    //Atualiza uma noticia do banco de dados
    public function alter($news_id, string $title, string $caption, string $content,$thumb_url, $category, $branch, $date): News
    {
        $news = $this->findById($news_id);
        $news->title = $title;
        $news->caption = $caption;
        $news->content = $content;
        $news->category = $category;
        $news->branch = $branch;
        $news->date = $date;
        if(!empty($thumb_url)){
            $news->thumb_url = $thumb_url;
        }
        $news->save();
        
        return $news;
    }

    //Remove uma noticia do banco de dados
     public function remove($news_id): void
    {
        $news = $this->findById($news_id);
        if($news){
           $news->destroy();
        }else{
            echo "<pre>";
            var_dump($news);
            echo "</pre>";
        }
    }

    
}