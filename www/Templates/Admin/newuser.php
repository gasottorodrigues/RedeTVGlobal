<?php 
    $v->layout("_main.php"); 
?>

<div class="p-5 text-center news-form">
    <h1>Novo Usuário</h1>
    <form action="<?=url("admin/usuarios/novo")?>" method="post">
        <div class="row m-0 text-center">
            <input type="text" name="nickname" class="col-12 title" placeholder="Nick">
        </div>
        <div class="row m-0 text-center">
            <input type="mail" name="email" class="col-12 title" placeholder="E-mail">
        </div>
        <div class="row m-0 text-center">
            <input type="password" name="passwd" class="col-12 title" placeholder="Senha">
        </div>
       <button type="submit" class="w-50 submit">Salvar User</button>
    </form>
</div>