<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class News extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("news",["title","caption","content","tag","date","branch","category"],"news_id");
    }

    public function add(string $title, string $caption, string $content, string $tags, $date, $branch, $category): News
    {
        $this->title = $tilte;
        $this->caption = $caption;
        $this->content = $content;
        $this->tags = $tags;
        $this->date = $date;
        $this->branch = $branch;
        $this->category = $category;
        $this->save();

        return $this;
    }

}