<?php 
    $v->layout("_main.php"); 
?>

<div class="p-5 text-center news-form">
    <h1>Novo link de conversa</h1>
    <form action="<?=url("admin/converses/novo")?>" method="post">
        <div class="row m-0 text-center">
            <input type="text" name="cv_link" class="col-12 title" placeholder="Link">
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

        <button type="submit" class="w-50 submit">Salvar Link</button>
    </form>
</div>