<?php 
	$v->layout("_main.php"); 
	date_default_timezone_set("America/Sao_Paulo");
?>

<div class="p-5 text-center news-form">
	<h1> Upload de uma live</h1>
	<form action="<?=url("admin/lives/nova")?>" method="post" enctype="multipart/form-data">
		<div class="row m-0 text-center">
			<input type="text" name="title" class="col-12 title" placeholder="Título">
		</div>
		<div class="row mx-0 my-3">
			<div class="col-lg-3 col-12">
			<label for="live" class="file-label form-control">Selecione a live</label>
			<input type="file" name="live" class="d-none" id="live"/>
			</div>
			<div class="col-lg-3 col-12">
			<select name="branch" class="form-control" id="branch">
				<?php
					if($branches):
						foreach($branches as $branch):
				?>
						<option value="<?=$branch->branch_id;?>"><?=$branch->name;?></option>
				<?php
						endforeach;
					else:
				?>
					<option value="0">Sem opções</option>
				<?php endif; ?>
			</select>
			</div>
			<div class="col-lg-3 col-12">
                <input type="date" name="date" class="form-control" value="<?=date("Y-m-d")?>">
            </div>
		</div>
		<input type="hidden" name="status" value="Gravada"/>
		<button type="submit" class="w-50 submit">Salvar Live</button>
	</form>
</div>