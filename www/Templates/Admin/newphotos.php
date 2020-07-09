<?php 
    $v->layout("_main.php"); 
?>

<div class="form-div">
    <h1>Novas Fotos</h1>
    <form action="<?=url("admin/noticias/fotos/")?>" method="post">
        <div class="form-group">
            <input type="text" name="desc" placeholder="Categoria">
        </div>
        <div class="form-group">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</div>