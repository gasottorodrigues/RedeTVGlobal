<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>

    <link rel="stylesheet" href="<?=url("Templates/Admin/styles/interface.css")?>">
</head>
<body>
    <nav class="main-nav">
        <a href="<?=url("admin")?>">Home</a>
        <a href="<?=url("admin/categorias/nova")?>">Nova Categoria</a>
        <a href="<?=url("admin/categorias")?>">Categorias</a>
    </nav>

    <main class="main-content">
        <?php
        if(isset($content)):
            echo $content;
        else:
            echo $v->section("content");
        endif;
        ?>
    </main>

    <footer>
    </footer>
</body>
</html>