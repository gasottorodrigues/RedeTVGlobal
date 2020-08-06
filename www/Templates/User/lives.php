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
                if($lives || $on_lives):
                    foreach($lives as $live):
                        if($branch->branch_id==$live->id_tv && $live->status=="Gravada"):
?>
                        <a href="<?=$live->url;?>"><?=$live->titulo;?></a>
                        <p><span style="font-weight:bold;">Data:</span> <?=$live->data_post;?></p>                
<?php                   
                        endif;
                    endforeach;
                    
                    foreach($on_lives as $on_live):
                        if($branch->branch_id==$on_live->tv_id && $on_live->status=="Ao vivo"):
?>
                        <a href="<?=$on_live->link;?>"><?=$on_live->titulo;?></a>
                        <p style="color: red;" class="aovivo">AO VIVO</p>   
<?php       
                        endif;
                    endforeach;
                else:
                    ?>
                        <h4>Sem lives cadastradas!</h4>
                    <?php
                endif;

            endforeach;//branches
        else:
?>
        <h4>Sem TVS cadastradas!</h4>
<?php    
        endif;  
?>