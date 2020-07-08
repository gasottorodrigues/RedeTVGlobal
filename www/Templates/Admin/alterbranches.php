<?php
	$v->layout("_main.php");
?>

<div class="p-5 text-center news-form">

	<h1>Alterar Região</h1>
	<form action="<?=url("admin/regioes/alter/".$branch->branch_id)?>" method="post">
		
		<?php
			if($branch):
		?>
			<div class="row m-0 text-center">
				<input type="text" name="name" class="col-12 title" value="<?=$branch->name;?>">
			</div>

			<button type="submit" class="w-50 submit">Salvar Região</button>

		<?php
			endif;
		?>
			
	</form>

</div>