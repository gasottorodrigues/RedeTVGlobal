<?php
    $v->layout("_main.php");
?>


<div class="container p-5">
    <header class="news-header w-100">
        <h1 class="text-center"><?=$news->title?></h1>
        <h2 class="text-right"><?=$news->caption?></h2>
        <p class="d-box w-100"><span><?=$category?></span><span><?=$branch?></span><span><?=$news->date?></span></p>
    </header>
    <img src="<?=url($news->thumb_url)?>" style="width:100%">
    <div class="news-content">
        <?=$news->content?>
    </div>
</div>