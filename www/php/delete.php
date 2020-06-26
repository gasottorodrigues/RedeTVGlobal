<?php
    require __DIR__."/../vendor/autoload.php";

    use Source\Models\Category;

    $cat = (new Category ())->findById(1);

    if($cat){
        $cat->destroy();
    }

    echo"<pre>";
    var_dump($cat);
    echo"</pre>";
?>