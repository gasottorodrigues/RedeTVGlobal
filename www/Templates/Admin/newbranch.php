<?php 
    $v->layout("_main.php"); 
?>

<div class="p-5 text-center news-form">
    <h1>Nova Regiao</h1>
    <form action="<?=url("admin/regioes/nova")?>" method="post">
        <div class="row m-0 text-center">
            <input type="text" name="name" class="col-12 title" placeholder="Regiao">
        </div>

        <button type="submit" class="w-50 submit">Salvar Regiao</button>
    </form>
</div>
