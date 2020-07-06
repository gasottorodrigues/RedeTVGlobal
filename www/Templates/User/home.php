<?php
    $v->layout("_main.php");
?>

<?php $v->start("scripts") ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<?php $v->end(); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="w-100 carousel-image" style="background-image:url(<?=url("shared/capa.png")?>)" alt="First slide">
                </div>
            </div>
        <?php
        if(isset($news)):
            foreach($news as $n):
        ?>
            <div class="carousel-item">
                <div class="w-100 carousel-image" style="background-image:url(<?=url($n->thumb_url)?>)" alt="First slide">
                    <div class="caption p-4">
                        <h1><?=$n->title?></h1>
                        <h2><?=$n->caption?></h2>
                    </div>
                </div>
            </div>
        <?php 
            endforeach;
        endif;
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container recent-news p-5 w-100">
    <header class="news-header">
        <h1>Notícias Recentes <i class="fa fa-newspaper-o" aria-hidden="true"></i></h1>
    </header>
    
    <?php
        if(isset($news)):
        foreach($news as $n): 
    ?>
        <div class="news w-75">
            <div class="news-square-thumb" style="background-image:url(<?=url($n->thumb_url)?>)"></div>
            <div class="news-desc">
                <h1><a href="<?=url("regiao/{$n->branch}/categoria/{$n->category}/noticia/{$n->news_id}")?>"><?=$n->title?></a></h1>
                <h2><?=$n->caption?></h2>
            </div>
        </div>
    <?php 
        endforeach;
    endif;
    ?>

</div>
