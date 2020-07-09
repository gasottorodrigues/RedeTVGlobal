<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class News extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("photos",["foto_url, news_id"],"foto_id");
    }
    
    public function add(string $foto_url, $news_id): Photos
    {
        $this->foto_url = $foto_url;
        $this->news_id = $news_id;
        $this->save();

        return $this;
    }

    public function remove($foto_id): void
    {
        $foto = $this->findById($foto_id);
        if($foto){
           $foto->destroy();
        }else{
            echo "<pre>";
            var_dump($foto);
            echo "</pre>";
        }
    }
}