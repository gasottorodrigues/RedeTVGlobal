<?php
	$v->layout("_main.php");
?>
<div class="converse-container">
    <h1>Converse conosco</h1>
    <h2>Entre nos nossos grupos de WhatsApp para ter noticias a todo momento.</h2>
    <div class="row d-flex justify-content-center flex-wrap">
<?php
	if($branches):
		foreach($branches as $branch):
?>

	<div class="tv-contact col-12 col-lg-5">
		<h1><i class="fa fa-map-marker"></i> <?=$branch->name?></h1>
<?php
            if($cvs):
                foreach($cvs as $cv):
                    if($branch->branch_id == $cv->tv_id):
?>
                    <div class="link d-flex flex-column align-items-center">
                    <i class="fa fa-whatsapp"></i>
                    <a href="<?=$cv->cv_link;?>">Grupo do Whats de <?=$branch->name;?></a>
                    </div>            
                    
<?php
                    endif;
                endforeach;
            else:
            ?>
                <h4 style="color:crimson">Sem links cadastrados!</h4>
            <?php
            endif;
            ?>
	</div>

<?php
        endforeach;
?>
    </div>
<?php
	else:
?>
	<h1>Sem TVS cadastradas</h1>
<?php
	endif;
?>
</div>