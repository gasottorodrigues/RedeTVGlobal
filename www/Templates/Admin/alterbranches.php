<?php
	$v->layout("_main.php");
?>

<div>

	<h1>Alterar Região</h1>
	<form action="<?=url("admin/regioes/alter/".$branches->branch_id)?>" method="post">
		
		<?php
			if($branches):
		?>
			<div>
				<input type="text" name="branch" value="<?=$branches->name;?>">
			</div>
		<?php
			endif;
		?>
			
			<button type="submit" class="w-50 submit">Salvar Região</button>

	</form>

</div>