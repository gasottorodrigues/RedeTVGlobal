<?php 
    $v->layout("_main.php"); 
?>

<div class="p-5 text-center news-form">
    <h1>Nova Categoria</h1>
    <form action="<?=url("admin/categorias/nova")?>" method="post">
        <div class="row m-0 text-center">
            <input type="text" name="desc" class="col-12 title" placeholder="Categoria">
        </div>
        <button type="submit" class="w-50 submit">Salvar Categoria</button>
    </form>
</div>