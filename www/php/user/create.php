<?php
    require __DIR__."/../../vendor/autoload.php";

    use Source\Models\User;

    $user = new User ();

    $nick = "Gabriel";
    $email = "gabriel@gmail.com";
    $pass = md5("123");

    $user->add($nick,$email,$pass);

    if($user->fail()){
        $user->fail()->getMessage();
    }

    echo"<pre>";
    var_dump($user);
    echo"</pre>";
?>