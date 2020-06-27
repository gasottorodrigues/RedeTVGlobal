<?php
    require __DIR__."/../../vendor/autoload.php";

    use Source\Models\User;

    $user = new User;
    $table = $user->getAll();
    echo"<pre>";
    foreach($table as $user){
        echo $user->nickname."<br>";
    }
    echo"</pre>";
?>