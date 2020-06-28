<?php
    $v->layout("_main.php");
?>

<?php $v->start("scripts") ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<?php $v->end(); ?>

<?php $v->start("conteudo") ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="w-100 carousel-image" style="background-image:url(<?=url("Templates/User/img/thumb-1.jpg")?>)" alt="First slide">
                    <div class="caption p-4">
                        <h1>TÍTULO DA NOTÍCIA</h1>
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda officia ut amet pariatur voluptates commodi reprehenderit, accusamus hic rerum consequuntur aliquam ducimus doloribus? Ratione dolores iusto fuga possimus rerum accusamus?</h2>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="w-100 carousel-image" style="background-image:url(<?=url("Templates/User/img/thumb-2.jpg")?>)" alt="First slide">
                    <div class="caption p-4">
                        <h1>TÍTULO DA NOTÍCIA</h1>
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda officia ut amet pariatur voluptates commodi reprehenderit, accusamus hic rerum consequuntur aliquam ducimus doloribus? Ratione dolores iusto fuga possimus rerum accusamus?</h2>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="w-100 carousel-image" style="background-image:url(<?=url("Templates/User/img/thumb-3.jpg")?>)" alt="First slide">
                    <div class="caption p-4">
                        <h1>TÍTULO DA NOTÍCIA</h1>
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda officia ut amet pariatur voluptates commodi reprehenderit, accusamus hic rerum consequuntur aliquam ducimus doloribus? Ratione dolores iusto fuga possimus rerum accusamus?</h2>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="w-100 carousel-image" style="background-image:url(<?=url("Templates/User/img/thumb-4.jpg")?>)" alt="First slide">
                    <div class="caption p-4">
                        <h1>TÍTULO DA NOTÍCIA</h1>
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda officia ut amet pariatur voluptates commodi reprehenderit, accusamus hic rerum consequuntur aliquam ducimus doloribus? Ratione dolores iusto fuga possimus rerum accusamus?</h2>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="w-100 carousel-image" style="background-image:url(<?=url("Templates/User/img/thumb-5.jpg")?>)" alt="First slide">
                    <div class="caption p-4">
                        <h1>TÍTULO DA NOTÍCIA</h1>
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda officia ut amet pariatur voluptates commodi reprehenderit, accusamus hic rerum consequuntur aliquam ducimus doloribus? Ratione dolores iusto fuga possimus rerum accusamus?</h2>
                    </div>
                </div>
            </div>

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

    <div class="news w-100">

    </div>
<?php $v->end(); ?>