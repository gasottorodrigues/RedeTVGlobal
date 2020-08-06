<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Live extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatorios, chave primária, timestamp(nao obrigat�rio);
        parent::__construct("lives",["url","titulo","id_tv","data_post","status"],"id_lives");
    }

    public function add(string $url, string $titulo, $id_tv, $date, string $status): Live
    {   
        $this->url = $url;
        $this->titulo = $titulo;
        $this->id_tv = $id_tv;
        $this->data_post = $date;
        $this->status = $status;
        $this->save();

        return $this;
    }

    public function remove($id_lives): void
    {
        $live = $this->findById($id_lives);
        if($live){
           $live->destroy();
        }else{
            echo "<pre>";
            var_dump($live);
            echo "</pre>";
        }
	}
}

?>