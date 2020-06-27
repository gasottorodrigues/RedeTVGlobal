<?php
    require __DIR__."/../../vendor/autoload.php";

    use Source\Models\User;

    $user = new User();

    $nick = "a";
    $email = "doug@gmail.com";
    $pass = md5("123");

    $user->alter(5,$nick,$email,$pass);

    echo"<pre>";
    var_dump($user);
    echo"</pre>";
?>