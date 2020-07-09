<?php 
    $v->layout("_main.php"); 

    if($users):
        ?>
        <table  class="table table-striped">  
            <tr>
               <th>Apelido</th>
               <th>E-mail</th>
               <th colspan="2"> </th>
            </tr>

            <?php
            foreach($users as $user):
            ?>
                <tr>
                    <td class="w-25"><?=$user->nickname; ?></td>
                    <td class="w-50"><?=$user->email; ?></td>
                    <td><a href="<?=url("admin/usuarios/alter/{$user->user_id}")?>" class="fa fa-pencil-square-o"></a></td>
                    <td><a href="<?=url("admin/usuarios/delete/{$user->user_id}")?>" class="fa fa-times-circle"></a></td>
                </tr>
            <?php
            endforeach;
            ?>
        <table>
    <?php
    else:
    ?>
        <div class="alert alert-danger">
            <h1 style="text-align: center;">Sem Usuários cadastrados.</h1>
        </div>
    <?php
        endif;
    ?>
