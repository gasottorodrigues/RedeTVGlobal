<?php 
    $v->layout("_main.php"); 

    if($cats):
        ?>
        <table>  
            <tr>
               <th>Categorias</th>
               <th colspan="2">Ações</th>
            </tr>

            <?php
            foreach($cats as $cat):
            ?>
                <tr>
                    <td><?=$cat->description; ?></td>
                    <td><a href="<?=url("admin/categorias/delete/{$cat->cat_id}")?>">&times;</a></td>
                    <td><a href="<?=url("admin/categorias/alter/{$cat->cat_id}")?>">0</a></td>
                </tr>
            <?php
            endforeach;
            ?>
        <table>
    <?php
    else:
    ?>
        <div>
            <h1>Sem categorias cadastradas</h1>
        </div>
    <?php
        endif;
    ?>
