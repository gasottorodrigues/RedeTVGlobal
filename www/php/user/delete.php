<?php
    require __DIR__."/../../vendor/autoload.php";

    use Source\Models\User;

    $user = new User();
    
    echo"<pre>";
    var_dump($user);
    echo"</pre>";
?>