<?php 
    $v->layout("_main.php"); 
?>

<div class="form-div">
    <h1>Entre com sua conta</h1>
    <form action="<?=url("admin/login")?>" method="post">
        <div class="form-group">
            <input type="mail" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <input type="password" name="passwd" placeholder="Senha">
        </div>
        <div class="form-group">
            <button type="submit">Entrar</button>
        </div>
    </form>
</div>


<?php  $v->start("sidebar") ?>
    <a href="<?=url("");?>">Voltar</a>
<?php $v->end(); ?>