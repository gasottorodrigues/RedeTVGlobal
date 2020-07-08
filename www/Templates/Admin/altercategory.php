<?php
	$v->layout("_main.php");
?>

<div class="p-5 text-center news-form">

	<h1>Alterar Categoria</h1>
	<form action="<?=url("admin/categorias/alter/".$cat->cat_id)?>" method="post">
		
		<?php
			if($cat):
		?>
			<div class="row m-0 text-center">
				<input type="text" name="desc" class="col-12 title" value="<?=$cat->description;?>">
			</div>

			<button type="submit" class="w-50 submit">Salvar Categoria</button>

		<?php
			endif;
		?>
			
	</form>

</div>
