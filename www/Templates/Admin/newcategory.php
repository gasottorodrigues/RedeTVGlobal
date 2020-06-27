<?php 
    $v->layout("_main.php"); 
?>

<div class="form-div">
    <h1>Nova Categoria</h1>
    <form action="<?=url("admin/categorias/nova")?>" method="post">
        <div class="form-group">
            <input type="text" name="desc" placeholder="Categoria">
        </div>
        <div class="form-group">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</div>