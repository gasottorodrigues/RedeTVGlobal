<?php 
    $v->layout("_main.php"); 

    if($cats):
        ?>
        <ul>
        <?php
        foreach($cats as $cat):
        ?>

                <h1><?=$cat->description; ?></h1>
        <?php
        endforeach;
        ?>
        </ul>
    <?php
    else:
    ?>
        <div>
            <h1>Sem categorias cadastradas</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, corrupti beatae incidunt eligendi quibusdam eos aspernatur dolor provident modi illo assumenda ullam neque amet in dolores aut. Ad, consectetur provident.</p>
        </div>
    <?php
        endif;
    ?>
