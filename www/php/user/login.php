<?php
    require __DIR__."/../../vendor/autoload.php";

    use Source\Models\User;

    $user = new User ();

    $nick = "Gabriel";
    $pass = md5("123");


    if($user->login($nick,$pass)){
        echo "logou";
    }else{
        echo "nao logou";
    }

?>