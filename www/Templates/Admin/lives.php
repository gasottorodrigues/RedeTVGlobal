<?php
	$v->layout("_main.php");

    if($lives):
        ?>
        <table class="table table-striped">  
        <thead>
            <tr>
               <th>ID</th>
               <th>Título</th>
               <th>Data</th>
               <th colspan="2"></th>
            </tr>
        </thead>

            <?php
            foreach($lives as $live):
            ?>
                <tr>
                    <td><?=$live->id_lives; ?></td>
                    <td class="w-75"><?=$live->titulo; ?></td>
                    <td class="w-75"><?=$live->data_post; ?></td>
                    <td><a href="<?=url("admin/lives/delete/{$live->id_lives}")?>" class="fa fa-times-circle"></a></td>
                </tr>
            <?php
            endforeach;
            ?>
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