<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer{

    public function __construct()
    {
        // parametros  na ordem: Tabela, campos obrigatórios, chave primária, timestamp(nao obrigatório);
        parent::__construct("users",["nickname","email"],"user_id");
    }

    
    // Adiciona um novo usuário ao banco de dados
    public function add(string $nick,string $email,string $pass)
    {
        $hasNick = $this->find("nickname = :nick","nick={$nick}")->fetch();
        $hasEmail = $this->find("email = :email","email={$email}")->fetch();

        if(!$hasNick && !$hasEmail){
            $this->nickname = $nick;
            $this->email = $email;
            $this->passwd = $pass;
            $this->save();
            return $this;
        }

        return NULL;
    }

    // Atualiza um usuário do banco de dados
    public function alter($id,string $nick,string $email,string $pass): User
    {
        $user = $this->findById($id);
        $user->nickname = $nick;
        $user->email = $email;
        $user->passwd = $pass;
        $user->save();

        return $this;
    }

    // Exclui um usuário do banco de dados
    public function remove($id): void
    {
        $user = $this->findById($id);
        if($user){
           $user->destroy();
        }
    }
    
    // Função de verificação de Login do usuário
    public function login(string $email, string $pass): bool
    {
        $user = $this->find("email=:email AND passwd=:pass","email={$email}&pass={$pass}")->limit(1)->fetch(true);

        if($user){
            return true;
        }
        return false;
    }

}


?>