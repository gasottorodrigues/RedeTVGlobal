<?php
    $v->layout("_main.php");

    if($lives):
        foreach($lives as $live):
?>
        <a href="<?=$live->url;?>">Live</a> 
<?php
        endforeach;
    else:
?>
    Sem lives :(
<?php
    endif;
?>