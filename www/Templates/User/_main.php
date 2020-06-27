<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>

    <link rel="stylesheet" href="<?=url("Templates/Users/styles/interface.css")?>">
</head>
<body>
    <header>
        <div></div>
        <nav>
            <a href="<?=url("admin")?>">Admin Mode</a>
        </nav>
        <div></div>
    </header>

    <main class="main-content">
        <?=$v->section("content");?>
    </main>

    <footer>
    </footer>
</body>
</html>