<?php 
    $v->layout("_main.php"); 
?>

<div class="form-div">
    <h1>Nova filial</h1>
    <form action="<?=url("admin/regioes/nova")?>" method="post">
        <div class="form-group">
            <input type="text" name="name" placeholder="Filial">
        </div>
        <div class="form-group">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</div>