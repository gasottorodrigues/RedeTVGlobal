<?php
    require __DIR__."/../../vendor/autoload.php";

    use Source\Models\User;

    $users = new User ();

    $nick = "Guilherme";
    $email = "gui@gmail.com";
    $pass = md5("123");

    $users->add($nick,$email,$pass);

    if($users->fail()){
        $users->fail()->getMessage();
    }

    echo"<pre>";
    var_dump($users);
    echo"</pre>";
?>