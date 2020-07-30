<?php
	$v->layout("_main.php");
?>
    <h1>Converse conosco.</h1>
    <p>Entre nos nossos grupos de WhatsApp para ter noticias a todo momento.</p>
<?php
	if($branches):
		foreach($branches as $branch):
?>

	<div>
		<h1><?=$branch->name?></h1>
<?php
            if($cvs):
                foreach($cvs as $cv):
                    if($branch->branch_id == $cv->tv_id):
?>
                    
                    <a href="<?=$cv->cv_link;?>">Grupo do Whats de <?=$branch->name;?>.</a>             
                    
<?php
                    endif;
                endforeach;
            else:
            ?>
                <h4>Sem links cadastrados!</h4>
            <?php
            endif;
            ?>
	</div>

<?php
		endforeach;
	else:
?>
	<h1>Sem TVS cadastradas</h1>
<?php
	endif;
?>