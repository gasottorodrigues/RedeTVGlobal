<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("users",["nickname","email"],"user_id");
    }

    public function add(string $nick,string $email,string $pass): User
    {
        $this->nickname = $nick;
        $this->email = $email;
        $this->passwd = $pass;
        $this->save();

        return $this;
    }

}


?>