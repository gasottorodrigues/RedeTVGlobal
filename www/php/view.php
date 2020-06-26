<?php
    require __DIR__."/../vendor/autoload.php";

    use Source\Models\Category;

    $cat = new Category;
    $table = $cat->find()->fetch(true);
    echo"<pre>";
    foreach($table as $cat){
        var_dump($cat->cat_id);
    }
    echo"</pre>";
?>