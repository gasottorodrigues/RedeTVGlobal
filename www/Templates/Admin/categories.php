<?php 
    $v->layout("_main.php"); 

    if($cats):
        ?>
        <table class="table table-striped">  
            <tr>
               <th>ID</th>
               <th>Categorias</th>
               <th colspan="2"></th>
            </tr>

            <?php
            foreach($cats as $cat):
            ?>
                <tr>
                    <td><?=$cat->cat_id; ?></td>
                    <td class="w-75"><?=$cat->description; ?></td>
                    <td><a href="<?=url("admin/categorias/alter/{$cat->cat_id}")?>" class="fa fa-pencil-square-o"></a></td>
                    <td><a href="<?=url("admin/categorias/delete/{$cat->cat_id}")?>" class="fa fa-times-circle"></a></td>
                </tr>
            <?php
            endforeach;
            ?>
        <table>
    <?php
    else:
    ?>
        <div class="alert alert-danger">
            <h1 style="text-align: center;">Sem categorias cadastradas.</h1>
        </div>
    <?php
        endif;
    ?>
