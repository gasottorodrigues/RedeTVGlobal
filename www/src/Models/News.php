<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;


class News extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("news",["title","caption","content","thumb_url","category","branch", "date"],"news_id");
    }

    public function add(string $title, string $caption, string $content, string $thumb_url, $category, $branch,$date): News
    {
        $this->title = $title;
        $this->caption = $caption;
        $this->content = $content;
        $this->thumb_url = $thumb_url;
        $this->category = $category;
        $this->branch = $branch;
        $this->date = $date;
        $this->save();

        return $this;
    }

    //Atualiza uma noticia do banco de dados
    public function alter($news_id, string $title, string $caption, string $content, string $thumb_url, $category, $branch, $date): News
    {
        $news = $this->findById($news_id);
        $news->title = $title;
        $news->caption = $caption;
        $news->content = $content;
        $news->thumb_url = $thumb_url;
        $news->category = $category;
        $news->branch = $branch;
        $news->date = $date;
        $news->save();

        echo "<pre>";
        var_dump($news);
        echo "</pre>";
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