<?php 
    $v->layout("_main.php"); 
?>

<div class="form-div">
    <h1>Novo Usuário</h1>
    <form action="<?=url("admin/usuarios/novo")?>" method="post">
        <div class="form-group">
            <input type="text" name="nickname" placeholder="Nick">
        </div>
        <div class="form-group">
            <input type="mail" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <input type="password" name="passwd" placeholder="Senha">
        </div>
        <div class="form-group">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</div>