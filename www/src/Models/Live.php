<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Live extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("lives",["url","titulo","id_tv","data"],"id");
    }

    public function add(string $url, string $titulo, $id_tv, $date): Live
    {
        $this->url = $url;
        $this->titulo = $titulo;
        $this->id_tv = $id_tv;
        $this->data = $date;
        $this->save();

        return $this;
    }
}

?>