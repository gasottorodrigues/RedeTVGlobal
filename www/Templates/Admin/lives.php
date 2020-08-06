<?php
	$v->layout("_main.php");

    if($lives || $lives_on):
        ?>
        <table class="table table-striped">  
        <thead>
            <tr>
               <th>ID</th>
               <th>Título</th>
               <th>Data</th>
               <th>Status</th>
               <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($lives as $live):
            ?>
                <tr>
                    <td><?=$live->id_lives; ?></td>
                    <td class="w-75"><?=$live->titulo; ?></td>
                    <td class="w-75"><?=$live->data_post; ?></td>
                    <td class="w-75"><?=$live->status; ?></td>
                    <td><a href="<?=url("admin/lives/delete/{$live->id_lives}")?>" class="fa fa-times-circle"></a></td>
                </tr>
            <?php
            endforeach;
            ?>
            <?php
            foreach($lives_on as $live_on):
            ?>
                <tr>
                    <td><?=$live_on->aovivo_id;?></td>
                    <td class="w-75"><?=$live_on->titulo;?></td>
                    <td class="w-75"><?=$live_on->link;?></td>
                    <td class="w-75"><?=$live_on->status;?></td>
                    <td><a href="<?=url("admin/onlives/delete/{$live_on->aovivo_id}")?>" class="fa fa-times-circle"></a></td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
        <table>
    <?php
    else:
    ?>
        <div class="alert alert-danger">
            <h1 style="text-align: center;">Sem lives cadastradas.</h1>
        </div>
    <?php
        endif;
    ?>