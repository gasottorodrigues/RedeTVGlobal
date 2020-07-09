<?php 
    $v->layout("_main.php"); 
?>

<div style="position: absolute;">
    <h1 class="bg-warning text-white" style="text-align: center;">Entre com sua conta</h1>
    <form class="form-inline" action="<?=url("admin/login")?>" method="post">
        <div class="form-group mb-2">
            <label class="sr-only">Email</label>
            <input type="mail" class="form-control-plaintext" name="email" placeholder="E-mail">
        </div>
        <div class="form-group mx-sm-3 mb-2">
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