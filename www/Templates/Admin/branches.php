<?php 
    $v->layout("_main.php"); 

    if($branches):
        ?>
        <table class="table table-striped">  
            <tr>
               <th>ID</th>
               <th>Regiões</th>
               <th colspan="2"> </th>
            </tr>

            <?php
            foreach($branches as $branch):
            ?>
                <tr>
                    <td><?=$branch->branch_id; ?></td>
                    <td class="w-75"><?=$branch->name; ?></td>
                    <td><a href="<?=url("admin/regioes/alter/{$branch->branch_id}")?>" class="fa fa-pencil-square-o"></a></td>
                    <td><a href="<?=url("admin/regioes/delete/{$branch->branch_id}")?>" class="fa fa-times-circle"></a></td>
                </tr>
            <?php
            endforeach;
            ?>
        <table>
    <?php
    else:
    ?>
        <div>
            <h1>Sem filiais cadastradas.</h1>
        </div>
    <?php
        endif;
    ?>
