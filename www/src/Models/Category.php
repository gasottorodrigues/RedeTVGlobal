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

     // Atualiza uma categoria do banco de dados
    public function alter($cat_id,string $desc): Category
    {
        $categorie = $this->findById($cat_id);
        $categorie->cat_id = $cat_id;
        $categorie->description = $desc;
        $categorie->save();

        echo "<pre>";
        var_dump($categorie);
        echo "</pre>";
        return $categorie;
    }

     // Exclui uma categoria do banco de dados
    public function remove($cat_id): void
    {
        $categorie = $this->findById($cat_id);
        if($categorie){
           $categorie->destroy();
        }else{
            echo "<pre>";
            var_dump($categorie);
            echo "</pre>";
        }
    }

    // Famoso select *
    public function getAll(){
        return $categorie->find()->fetch(true);
    }
}

?>