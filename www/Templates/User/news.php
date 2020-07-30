<?php
    $v->layout("_main.php");
?>

<?php $v->start("scripts") ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<?php $v->end(); ?>


<div class="container p-5">
    
    <header class="news-header w-100">
        <h1 class="text-center"><?=$news->title?></h1>
        <h2 class="text-right"><?=$news->caption?></h2>
        <p class="d-box w-100"><span><?=$category?></span><span><?=$branch?></span><span><?=$news->date?></span></p>
    </header>

    <div class="news-thumb">
        <img src="<?=url($news->thumb_url)?>" style="width:100%">
    </div>

    <div class="news-content" style="color:#000;">
        <?=$news->content?>
    </div>
    
    <?php if(isset($others)): ?>
    <div class="other-news">
        <h1>Mais para você</h1>
        <div class="row">
            <?php foreach($others as $n): ?>
            <div class="col-12 col-lg-4">
                <img src="<?=url($n->thumb_url)?>" class="img-fluid">
                <h1><a href="<?=url("noticia/".$n->news_id)?>"><?=$n->title?></a></h1>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <?php if(isset($ads)): ?>
    <div class="ad-container">
        <div class="row">
            <?php foreach($ads as $ad): ?>
            <div class="col-12 col-lg-4">
                <img src="<?=url($ad->thumb)?>" class="img-fluid">
                <h1><a href="<?=$ad->link?>" target="_blank"><?=$ad->description?></a></h1>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

</div>