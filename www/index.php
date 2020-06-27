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

    $router->get("/login","Admin:login");
    $router->post("/login","Admin:checkLogin");
    $router->get("/logout","Admin:logout");

    $router->get("/usuarios","Admin:viewUsers");
    $router->get("/usuarios/novo","Admin:newUser");
    $router->post("/usuarios/novo","Admin:saveUser");
    $router->get("/usuarios/delete/{user_id}","Admin:removeUser");

    $router->get("/categorias","Admin:viewCategories");
    $router->get("/categorias/nova","Admin:newCategory");
    $router->post("/categorias/nova","Admin:saveCategory");
    $router->get("/categorias/delete/{cat_id}","Admin:removeCategory");

    $router->get("/filiais","Admin:viewBranches");
    $router->get("/filiais/nova","Admin:newBranch");
    $router->post("/filiais/nova","Admin:saveBranch");
    $router->get("/filiais/delete/{branch_id}","Admin:removeBranch");

    $router->group("ooops");
    $router->get("/{errcode}","Web:error");

    $router->dispatch();

    if($router->error()){
        $router->redirect("/ooops/{$router->error()}");
    }
?>