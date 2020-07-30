<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Ad extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("ads",["description","thumb","link"],"ad_id");
    }

    public function add(string $desc,string $thumb,string $link): Ad
    {
        $this->description = $desc;
        $this->thumb = $thumb;
        $this->link = $link;
        $this->save();

        if($this->fail()){
            echo $this->fail()->getMessage();
        }

        return $this;
    }

    public function remove($ad_id): void
    {
        $ad = $this->findById($ad_id);
        if($ad){
           $ad->destroy();
        }else{
            echo "<pre>";
            var_dump($ad);
            echo "</pre>";
        }
    }
}

?>