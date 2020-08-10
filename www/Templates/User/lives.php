<?php
    $v->layout("_main.php");


?>
<div class="lives-container">
    <h1>Lives Da GlobalTV</h1>
    <div class="tvs-container">
<?php
        if($branches):
            foreach($branches as $branch):
?>
                <div class="live-tv">
                <h2><i class="fa fa-map-marker"></i> <?=$branch->name;?></h2>
<?php
                if($lives || $on_lives):
                    if($on_lives):
                        foreach($on_lives as $on_live):
                            if($branch->branch_id==$on_live->tv_id && $on_live->status=="Ao vivo"):
?>
                            <div class="lives-on">
                                <a href="<?=$on_live->link;?>" target="_blank"><?=$on_live->titulo;?> <span><i class="fa fa-circle"></i> AO VIVO<span></a>
                                
                            </div>
<?php       
                            endif;
                        endforeach;
                    endif;
                    if($lives):
                        foreach($lives as $live):
                            if($branch->branch_id==$live->id_tv && $live->status=="Gravada"):
    ?>
                            <div class="lives-off">
                                <a href="<?=$live->url;?>" target="_blank"><?=$live->titulo;?><span><?=$live->data_post;?></span></a>
                            </div>               
    <?php                   
                            endif;
                        endforeach;
                    endif;
                else:
                    ?>
                        <h4>Sem lives cadastradas!</h4>
                    <?php
                endif; ?>
                </div>
<?php
            endforeach;//branches
        else:
?>
        <h4>Sem TVS cadastradas!</h4>
<?php    
        endif;  
?>
    </div>
</div>