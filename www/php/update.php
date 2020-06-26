<?php
    require __DIR__."/../vendor/autoload.php";

    use Source\Models\Category;

    $cat = (new Category ())->findById(1);
    $cat->description = "politicagem";
    $cat->save();

    echo"<pre>";
    var_dump($cat);
    echo"</pre>";
?>