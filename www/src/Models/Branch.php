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

     // Atualiza uma branch do banco de dados
    public function alter($branch_id,string $name): Branch
    {
        $branch = $this->findById($branch_id);
        $branch->branch_id = $branch_id;
        $branch->name = $name;
        $branch->save();

        echo "<pre>";
        var_dump($branch);
        echo "</pre>";
        return $branch;
    }

    public function remove($branch_id): void
    {
        $branch = $this->findById($branch_id);
        if($branch){
           $branch->destroy();
        }
	}

    public function getAll(){
        return $branch->find()->fetch(true);
    }
}

?>