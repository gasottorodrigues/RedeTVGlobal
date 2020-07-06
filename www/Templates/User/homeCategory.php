<?php
    $v->layout("_main.php");
?>

<?php $v->start("scripts") ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<?php $v->end(); ?>

<div class="container recent-news p-5 w-100">
    <header class="news-header">
        <h1><?=$actual_category?> <i class="fa fa-newspaper-o" aria-hidden="true"></i></h1>
    </header>
    
    <?php
        if(isset($news)):
        foreach($news as $n): 
    ?>
        <div class="news w-75">
            <div class="news-square-thumb" style="background-image:url(<?=url($n->thumb_url)?>)"></div>
            <div class="news-desc">
                <h1><a href="<?=url("regiao/{$branch_id}/categoria/{$cat_id}/noticia/{$n->news_id}")?>"><?=$n->title?></a></h1>
                <h2><?=$n->caption?></h2>
            </div>
        </div>
    <?php 
        endforeach;
    endif;
    ?>

</div>
