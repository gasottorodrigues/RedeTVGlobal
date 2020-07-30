<?php
    $v->layout("_main.php");
?>

    <h1>Lives Gravadas</h1>

<?php
    if($branches):
        foreach($branches as $branch):
?>
        <h1><?=$branch->name;?></h1>
<?php
            if($lives):
                foreach($lives as $live):
                    if($branch->branch_id == $live->id_tv):
?>
                    
                    <a href="<?=$live->url;?>"><?=$live->titulo;?></a>
                    <p><?=$live->data_post;?></p>
                    
<?php
                    endif;
                endforeach;
            else:
            ?>
                <h4>Sem lives cadastradas!</h4>
            <?php
            endif;
         endforeach;
    else:
?>
        <h4>Sem TVS cadastradas!</h4>
<?php    
    endif;
?>