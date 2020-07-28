<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="icon" href="<?=url("shared/icon.png")?>" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=url("Templates/User/css/interface.css")?>">
</head>
<body>
    <div class="container-fluid w-100 main-container">

        <header class="main-header w-100 row" style="margin:0 0;">
                <nav class="navbar navbar-expand-lg  col-12 col-lg-10">
                        <a class="navbar-brand" href="<?=url("")?>">
                            <img src="<?=url("shared/logo-2.png")?>" alt="Global TV">
                        </a>
                        <button class="navbar-toggle navbar-toggler  navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon d-flex justify-content-center align-items-center">
                                <i class="fa fa-bars"></i>
                            </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                
                                <?php if(isset($actual_branch)): ?>
                                <li class="nav-item disabled region">
                                    <span class="nav-link" style="color:#0000CD;text-transform:uppercase;font-weight:bold;"><?=$actual_branch?></span>
                                </li>
                                <?php endif; ?>
                
                                <li class="nav-item active">
                                    <?php if(!isset($actual_branch)): ?>
                                    <a class="nav-link" href="<?=url("")?>">Home</a>
                                    <?php else: ?>
                                        <a class="nav-link" href="<?=url("regiao/".$branch_id)?>">Home</a>
                                    <?php endif; ?>
                                </li>

                                <?php if(isset($actual_branch)): ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNews" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                                    
                                    <div class="dropdown-menu">
                                        <ul class="d-flex flex-column justify-content-between align-items-center">
                                            <?php if($cats):
                                                    foreach($cats as $cat):
                                                ?>
                                                <li>
                                                    <a href="<?=url("regiao/".$branch_id."/categoria/".$cat->cat_id)?>" class="nav-link"><?=$cat->description?></a>
                                                </li>
                                                <?php 
                                                    endforeach; 
                                                ?>
                                            <?php
                                                endif;
                                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <?php endif; ?>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNews" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TVS</a>
                                    
                                    <div class="dropdown-menu">
                                        <ul class="d-flex flex-column justify-content-between align-items-center">
                                            <?php if($branches):
                                                    foreach($branches as $branch):
                                                ?>
                                                <li>
                                                    <a href="<?=url("regiao/".$branch->branch_id)?>" class="nav-link"><?=$branch->name?></a>
                                                </li>
                                                <?php 
                                                    endforeach; 
                                                endif;
                                            ?>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="<?=url("lives")?>" class="nav-link">Live</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?=url("")?>" class="nav-link">Converse com a gente</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <nav class="navbar navbar-expand-lg col-md-2 d-none d-lg-flex justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link fa fa-facebook"></a>
                            </li>
                        </ul>
                    </nav>
               
                    
        </header>

        <div class="w-100">
            <?= $v->section("content");?>
        </div>

        <footer class="w-100 main-footer p-4 row m-0">
            <div class="col-12 col-lg-3 d-flex flex-column align-items-center">
                <img src="<?=url("shared/logo-1.png")?>" class="img-fluid w-50" >
                <span>Todos os Direitos Reservados &copy; 2020</span>
            </div>
            <div class="col-12 col-lg-3">
                <header class="footer-header p-2">
                TVs
                </header>
                <div class="footer-list ">
                    <ul>
                        <?php foreach($branches as $b): ?>
                            <li><?=$b->name?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <header class="footer-header p-2">
                Categorias
                </header>
                <div class="footer-list ">
                    <ul>
                        <?php foreach($cats as $c): ?>
                            <li><?=$c->description?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <header class="footer-header p-2">
                    Sobre
                </header>
                <div class="footer-list ">
                    <ul>
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Propaganda</a></li>
                        <li><a href="#">Marca Comercial</a></li>
                        <li><a href="#">Licença</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <?=$v->section("scripts"); ?>
</body>
</html>