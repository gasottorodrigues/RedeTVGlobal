<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class News extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("news",["thumb_url","title","caption","content","tag","date","branch","category"],"news_id");
    }

    public function add(string $thumb_url, string $title, string $caption, string $content, string $tags, $date, $branch, $category): News
    {
        //Upload da imagem
        $uploaddir = '/thumbs';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        if ((move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))) {
            $url = $_FILES['userfile']['tmp_name'];
            echo "Arquivo válido e enviado com sucesso.\n";
        } else {
            echo "Possível ataque de upload de arquivo!\n";
        }
        //end upload
        
        $this->thumb_url = $url;
        $this->title = $title;
        $this->caption = $caption;
        $this->content = $content;
        $this->tags = $tags;
        $this->date = $date;
        $this->branch = $branch;
        $this->category = $category;
        $this->save();

        return $this;
    }

    public function alter($news_id, string $thumb_url, string $title, string $caption, string $content, string $tags, $date, $branch, $category): News
    {
       $news = $this->findByID($news_id);
       $news->$thumb;
	}

}