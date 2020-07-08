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
        <div>
            <h1>Sem Usuários cadastrados</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, corrupti beatae incidunt eligendi quibusdam eos aspernatur dolor provident modi illo assumenda ullam neque amet in dolores aut. Ad, consectetur provident.</p>
        </div>
    <?php
        endif;
    ?>
