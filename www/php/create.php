<?php
    require __DIR__."/../vendor/autoload.php";

    use Source\Models\User;

    $user = new User (); // <- Criei um usuário no sistema

    // Carreguei os dados de cadastro do formulario
    $nick = "Douglas";
    $email = "doug@gmail.com";
    $pass = md5("123");

    $user->add($nick,$email,$pass); // <- adicionei no banco

    // Verifiquei se deu erro em alguma coisa e gg
    if($user->fail()){
        $user->fail()->getMessage();
    }
?>