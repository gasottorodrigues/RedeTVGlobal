<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Cv extends DataLayer{

	public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("cvs",["cv_link","tv_id"],"cv_id",false);
    }

    public function add(string $cv_link, $tv_id): Cv
    {
        $this->cv_link = $cv_link;
        $this->tv_id = $tv_id;
        $this->save();

        if($this->fail()){
            echo $this->fail()->getMessage();
        }

        return $this;
    }

    public function remove($cv_id): void
    {
        $cv = $this->findById($cv_id);
        if($cv){
           $cv->destroy();
        }else{
            echo "<pre>";
            var_dump($cv);
            echo "</pre>";
        }
	}

}

?>