<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="icon" href="<?=url("Templates/User/src/icon.png")?>" >
    <link rel="stylesheet" href="<?=url("Templates/User/css/interface.css")?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid w-100 main-container">

        <header class="w-100 main-header p-1 d-flex justify-content-center align-items-center">
            <div class="col-sm-3 p-3">
                <img src="<?=url("Templates/User/src/logo-3.png")?>" class="img-fluid">
            </div>
            <nav class="col-sm">
                <ul class="nav navbar justify-content-start">
                    <li class="nav-item">
                        <a href="<?=url("")?>" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?=url("")?>" class="nav-link">Notícias</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?=url("")?>" class="nav-link">Regiões</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?=url("")?>" class="nav-link">Lives</a>
                    </li>
                    <li class="nav-item">
                    <a href="<?=url("")?>" class="nav-link">Entre no zap</a>
                    </li>
                </ul>
            </nav>
            <div class="col-sm-2 social">
            <ul class="nav navbar justify-content-center">
                    <li class="nav-item">
                        <a href="<?=url("")?>" class="nav-link fa fa-facebook"></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=url("")?>" class="nav-link fa fa-instagram"></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=url("")?>" class="nav-link fa fa-twitter"></a>
                    </li>
                </ul>
            </div>
        </header>

        <div class="w-100">
            <?= $v->section("content");?>
        </div>

        <footer class="w-100 main-footer p-4 d-flex justify-content-center">
            <div class="col-md d-flex flex-column align-items-center">
                <img src="<?=url("Templates/User/src/logo-1.png")?>" class="img-fluid w-50" >
                <span>Todos os Direitos Reservados &copy; 2020</span>
            </div>
            <div class="col-md-5">
                <header class="footer-header p-2">
                Categorias Populares
                </header>
                <div class="footer-list ">
                    <ul>
                        <li>Esporte (30)</li>
                        <li>Política (20)</li>
                        <li>Entretenimento (15)</li>
                        <li>Ciência (10)</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
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