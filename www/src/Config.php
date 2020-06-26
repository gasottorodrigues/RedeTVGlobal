<?php

define("BASE_URL","http://localhost/RedeTVGlobal/www");

define("SITE","GlobalTV");

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "globaltv",
    "username" => "globaltv_admin",
    "passwd" => "01globaltv01",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/*
@param string|null $uri
@return string

Retorna a string de acesso da rota.
*/
function url(string $uri): string
{
    if($uri){
        return ROOT."/{$uri}";
    }
    
    return ROOT;
}

?>