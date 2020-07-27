<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="icon" href="<?=url("shared/icon.png")?>" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=url("Templates/Admin/css/interface.css")?>">

</head>
<body>
    <nav class="main-nav">
        <?php 
        if ($v->section("sidebar")): 
            echo $v->section("sidebar");
        else:
        ?>
        <header class="main-header w-100 row" style="margin:0 0;">
                <nav class="navbar navbar-expand-lg  col-12 col-lg-10">
                        <a class="navbar-brand" href="#">
                            <img src="<?=url("shared/logo-3.png")?>" alt="Global TV">
                        </a>
                        <button class="navbar-toggle navbar-toggler  navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon d-flex justify-content-center align-items-center">
                                <i class="fa fa-bars"></i>
                            </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item disabled region">
                                    <span class="nav-link" style="color:#DB640F;text-transform:uppercase;">Administrador</span>
                                </li>
                
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?=url("admin")?>">Início</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNews" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NOVA</a>
                                    
                                    <div class="dropdown-menu">
                                        <ul class="d-flex flex-column justify-content-between align-items-center">
                                            <li class="nav-item">
                                                <a href="<?=url("admin/noticias/nova")?>" class="nav-link">Notícia</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?=url("admin/categorias/nova")?>" class="nav-link">Categoria</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?=url("admin/regioes/nova")?>" class="nav-link">TV</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?=url("admin/usuarios/novo")?>" class="nav-link">Usuário</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?=url("admin/lives/nova")?>" class="nav-link">Live</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNews" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VISUALIZAR</a>
                                    
                                    <div class="dropdown-menu">
                                        <ul class="d-flex flex-column justify-content-between align-items-center">
                                            <li class="nav-item">
                                                <a href="<?=url("admin/noticias")?>" class="nav-link">Notícias</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?=url("admin/categorias")?>" class="nav-link">Categorias</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?=url("admin/regioes")?>" class="nav-link">TVS</a>
                                            </li>                                        
                                            <li class="nav-item">
                                                <a href="<?=url("admin/usuarios")?>" class="nav-link">Usuários</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?=url("admin/lives")?>" class="nav-link">Lives</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?=url("admin/logout")?>">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
        </header>
        <?php endif; ?>
    </nav>

    <main class="main-content">
        <?= $v->section("content");?>
    </main>

    <footer>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <?= $v->section("scripts"); ?>
</body>
</html>