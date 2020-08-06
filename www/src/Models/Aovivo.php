<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Aovivo extends DataLayer{

	public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("aovivo",["link","tv_id","status","titulo"],"aovivo_id", false);
    }

    public function add(string $link, $tv_id, string $status, string $titulo): Aovivo
    {
        $this->link = $link;
        $this->tv_id = $tv_id;
        $this->status = $status;
        $this->titulo = $titulo;
        $this->save();

        if($this->fail()){
            echo $this->fail()->getMessage();
        }

        return $this;
	}

    public function remove($aovivo_id): void
    {
        $aovivo = $this->findById($aovivo_id);
        if($aovivo){
           $aovivo->destroy();
        }else{
            echo "<pre>";
            var_dump($aovivo);
            echo "</pre>";
        }
    }
}