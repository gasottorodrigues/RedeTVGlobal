<?php 
    $v->layout("_main.php"); 

    if($cvs):
?>

    <table class="table table-striped">  
        <thead>
            <tr>
               <th>ID</th>
               <th>Link</th>
               <th>ID TV</th>
               <th></th>
            </tr>
        </thead>

            <?php
            foreach($cvs as $cv):
            ?>
                <tr>
                    <td><?=$cv->cv_id; ?></td>
                    <td class="w-75"><?=$cv->cv_link; ?></td>
                    <td class="w-75"><?=$cv->tv_id; ?></td>
                    <td><a href="<?=url("admin/converses/delete/{$cv->cv_id}")?>" class="fa fa-times-circle"></a></td>
                </tr>
            <?php
            endforeach;
            ?>
        <table>
        <?php
        else:
        ?>
        <div class="alert alert-danger">
            <h1 style="text-align: center;">Sem links cadastrados.</h1>
        </div>
     <?php
        endif;
    ?>