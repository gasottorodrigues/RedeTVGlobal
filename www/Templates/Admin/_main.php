<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>

    <link rel="stylesheet" href="<?=url("Templates/Admin/styles/interface.css")?>">
    <link rel="stylesheet" href="<?=url("Templates/Admin/styles/interface.css")?>">
</head>
<body>
    <nav class="main-nav">
        <?php 
        if ($v->section("sidebar")): 
            echo $v->section("sidebar");
        else:
        ?>
        <a href="<?=url("admin")?>">Home</a>
        <a href="<?=url("admin/categorias/nova")?>">Nova Categoria</a>
        <a href="<?=url("admin/categorias")?>">Categorias</a>
        <a href="<?=url("admin/usuarios/novo")?>">Novo Usuario</a>
        <a href="<?=url("admin/usuarios")?>">Usuarios</a>
        <a href="<?=url("admin/filiais")?>">Filiais</a>
        <a href="<?=url("admin/filiais/nova")?>">Nova Filial</a>
        <a href="<?=url("admin/noticias/nova")?>">Nova Notícia</a>
        <a href="<?=url("admin/noticias")?>">Notícias</a>
        <a href="<?=url("admin/logout")?>">Sair</a>
        <?php endif; ?>
    </nav>

    <main class="main-content">
        <?= $v->section("content");?>
    </main>

    <footer>
        <?= $v->section("footer");?>
    </footer>
    <?= $v->section("scripts") ?>
</body>
</html>