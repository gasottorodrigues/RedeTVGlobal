<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Live extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("lives",["url,titulo,id_tv"],"id");
    }

    public function add(string $url, string $titulo, id_tv): Live
    {
        $this->url = $url;
        $this->titulo = $titulo;
        $this->id_tv = $id_tv;
        $this->save();

        return $this;
    }

    // Exclui uma live do banco de dados
    public function remove($live_id): void
    {
        if($live){
           $live->destroy();
        }else{
            echo "<pre>";
            var_dump($live);
            echo "</pre>";
        }
    }

    // Famoso select *
    public function getAll(){
        return $this->find()->fetch(true);
    }
}

?>