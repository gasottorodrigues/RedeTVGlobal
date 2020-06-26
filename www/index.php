<?php
    require_once __DIR__."/vendor/autoload.php";

    use CoffeeCode\Router\Router;

    $router = new Router(BASE_URL);

    $router->namespace("Source\App");

    $router->group(null);
    $router->get("/","Web:home");
    $router->get("/contato","Web:contact");

    $router->group("admin");
    $router->get("/","Admin:home");

    $router->group("ooops");
    $router->get("/{error}","Web:error");

    $router->dispatch();

    if($router->error()){
        $router->redirect("/ooops/{$router->error()}");
    }
?>