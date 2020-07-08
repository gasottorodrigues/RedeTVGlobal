<?php
	$v->layout("_main.php");
?>

<div class="p-5 text-center news-form">

	<h1>Alterar Usuário</h1>
	<form action="<?=url("admin/usuarios/alter/".$user->user_id)?>" method="post">
		
		<?php
			if($user):
		?>
			<div class="row m-0 text-center">
				<input type="text" name="nickname" class="col-12 title" value="<?=$user->nickname;?>">
			</div>
			<div class="row m-0 text-center">
				<input type="email" name="email" class="col-12 title" value="<?=$user->email;?>">
			</div>
			<div class="row m-0 text-center">
				<input type="password" name="passwd"class="col-12 title" value="<?=$user->passwd;?>">
			</div>

			<button type="submit" class="w-50 submit">Salvar Usuário</button>

		<?php
			endif;
		?>
			
	</form>

</div>