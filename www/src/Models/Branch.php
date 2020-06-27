<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Branch extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("branches",["name"],"branch_id");
    }

    public function add(string $name): Branch
    {
        $this->name= $name;
        $this->save();

        return $this;
    }
}


?>