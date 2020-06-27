<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Category extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("categories",["description"],"cat_id");
    }

    public function add(string $desc): Category
    {
        $this->description = $desc;
        $this->save();

        return $this;
    }
}


?>