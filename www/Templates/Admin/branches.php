<?php 
    $v->layout("_main.php"); 

    if($branches):
        ?>
        <table>  
            <tr>
               <th>Filiais</th>
               <th colspan="2">Ações</th>
            </tr>

            <?php
            foreach($branches as $branch):
            ?>
                <tr>
                    <td><?=$branch->name; ?></td>
                    <td><a href="<?=url("admin/filiais/delete/{$branch->branch_id}")?>">&times;</a></td>
                    <td><a href="<?=url("admin/filiais/alter/{$branch->branch_id}")?>">0</a></td>
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
