<?php 
    $v->layout("_main.php"); 
?>

<div class="login-form">
    <h1>Entre com sua conta</h1>
    <form class="form" action="<?=url("admin/login")?>" method="post">
        <div class="form-group">
            <label class="sr-only">Email</label>
            <input type="mail" class="form-control-plaintext" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label class="sr-only">Senha</label>
            <input type="password" class="form-control" name="passwd" placeholder="Senha">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mb-2">Entrar</button>
        </div>
    </form>
</div>

<?php  $v->start("sidebar") ?>
    <a href="<?=url("");?>">Voltar</a>
<?php $v->end(); ?>
