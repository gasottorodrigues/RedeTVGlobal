<?php
	$v->layout("_main.php");

    if($ads):
        ?>
        <table class="table table-striped">  
        <thead>
            <tr>
               <th>ID</th>
               <th>Descrição</th>
               <th>Link</th>
               <th></th>
            </tr>
        </thead>

            <?php
            foreach($ads as $ad):
            ?>
                <tr>
                    <td><?=$ad->ad_id; ?></td>
                    <td class="w-75"><?=$ad->description; ?></td>
                    <td class="w-75"><?=$ad->link; ?></td>
                    <td><a href="<?=url("admin/anuncios/delete/{$ad->ad_id}")?>" class="fa fa-times-circle"></a></td>
                </tr>
            <?php
            endforeach;
            ?>
        <table>
    <?php
    else:
    ?>
        <div class="alert alert-danger">
            <h1 style="text-align: center;">Sem anúncios cadastrados.</h1>
        </div>
    <?php
        endif;
    ?>